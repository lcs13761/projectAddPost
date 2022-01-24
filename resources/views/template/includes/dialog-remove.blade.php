
@push('js')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    <script>
        function remove(e, route) {

            swal({
                title: "Você tem certeza?",
                text: "Você não poderá recuperar mais esta informação!",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "Cancelar",
                        value: null,
                        visible: true,
                        className: "waves-effect waves-light btn grey lighten-1",
                        closeModal: true,
                    },
                    confirm: {
                        text: "OK",
                        value: true,
                        visible: true,
                        className: "waves-effect waves-light btn",
                        closeModal: false
                    },
                }
            }).then(async (isConfirm) => {

                if (isConfirm) {

                    let response = await fetch(route, {
                        method: 'POST',
                        body: JSON.stringify({
                            _method: 'delete',
                            _token: '{{ csrf_token() }}'
                        }),
                        headers: {
                            "Content-Type": "application/json"
                        }
                    });

                    let msg = await response.json();
                    console.log(msg);
                    if (msg['status'] == 'success') {
                        document.getElementById(e).classList.add('animated','fadeOutDown')
                        setTimeout(function() {document.getElementById(e).remove()}, 800)
                        swal("Deletado!", "Seu registro foi excluído.", "success");
                    } else {
                        swal("Cancelado!", "Houve algum problema com nosso servidor: ERRO: " +
                            msg['error'], "error");
                    }
                } else {
                    swal({
                        title: "Cancelado!",
                        text: "Seu registro NÃO foi excluído",
                        icon: "error",
                        buttons: {
                            confirm: {
                                text: "OK",
                                value: true,
                                visible: true,
                                className: "waves-effect waves-light btn",
                                closeModal: true
                            },
                        }
                    });
                }
            });
        }
    </script>

@endpush
