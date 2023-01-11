<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>

<script>
    function verificaForcaSenha() {
        var numeros = /([0-9])/;
        var alfabeto = /([a-zA-Z])/;
        var chEspeciais = /([~,.,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

        if ($('#password').val().length < 6) {
            $('#password-status').html("<span style='color:red'>Fraca! Insira no mínimo 6 caracteres.</span>");
        } else {
            if ($('#password').val().match(numeros) && $('#password').val().match(alfabeto) && $('#password').val().match(chEspeciais)) {
                $('#password-status').html("<span style='color:green'><b>Forte.</b></span>");
            } else {
                $('#password-status').html("<span style='color:orange'>Média! Insira um caracter especial.</span>")
            }
        }
    }
</script>

<script>
    function espiando() {
    let btn = document.querySelector('.lnr-eye');
    btn.addEventListener('click', function() {

        let input = document.querySelector('#password');
        if (input.getAttribute('type') == 'password') {
            input.setAttribute('type', 'text');
        } else {
            input.setAttribute('type', 'password');
        }

    });
}
</script>