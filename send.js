document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formulario');
    const submitButton = document.getElementById('enviar');
    const spinner = submitButton.querySelector('.spinner-border');
    const alerta = document.getElementById('alerta-contacto');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        submitButton.disabled = true;
        spinner.classList.remove('d-none');

        grecaptcha.ready(function() {
            grecaptcha.execute('6LfAaXArAAAAADfutA_Rqxqe6q2BywOyO8P7KObQ', {
                action: 'submit'
            }).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
                
                const formData = new FormData(form);
                fetch('send.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Personaliza el alert según éxito o error
                    alerta.style.display = 'block';
                    alerta.style.fontFamily = "'Bebas Neue', sans-serif";
                    alerta.style.borderRadius = '8px';
                    alerta.style.textAlign = 'center';
                    alerta.style.marginBottom = '1rem';
                    alerta.style.padding = '1rem';
                    alerta.style.fontSize = '1.2rem';
                    alerta.style.border = 'none';

                    if (data.success) {
                        alerta.style.backgroundColor = '#0f9002';
                        alerta.style.color = '#fff';
                        alerta.innerText = data.message;
                        form.reset();
                    } else {
                        alerta.style.backgroundColor = '#b30000';
                        alerta.style.color = '#fff';
                        alerta.innerText = data.message || 'Error al enviar el mensaje';
                    }
                    // Ocultar el alert después de 5 segundos
                    setTimeout(() => { alerta.style.display = 'none'; }, 5000);
                })
                .catch(error => {
                    alerta.style.display = 'block';
                    alerta.style.backgroundColor = '#b30000';
                    alerta.style.color = '#fff';
                    alerta.innerText = 'Error al enviar el mensaje';
                    setTimeout(() => { alerta.style.display = 'none'; }, 5000);
                })
                .finally(() => {
                    submitButton.disabled = false;
                    spinner.classList.add('d-none');
                    grecaptcha.execute('6LfAaXArAAAAADfutA_Rqxqe6q2BywOyO8P7KObQ', {action: 'submit'})
                    .then(function(newToken) {
                        document.getElementById('g-recaptcha-response').value = newToken;
                    });
                });
            });
        });
    });
});