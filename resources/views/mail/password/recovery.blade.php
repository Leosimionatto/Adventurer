<html>
    <head>
        <title></title>
    </head>
    <body>
        <table style="table-layout:inherit !important;width:525px;margin-right:auto;margin-left:auto;">
            <thead>
                <tr>
                    <th colspan="2" style="height:35px;background-color:#52738F;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding:14px;text-align:center;vertical-align:center;border-bottom:1px solid #e7e7e7;">
                        <img src="{{ $message->embed(asset('img/adventurer.png')) }}" width="125px">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;padding:14px;border-bottom:1px solid #e7e7e7">
                        <p style="font-size:16px;font-family:'Calibri Light', sans-serif !important;margin:0;"><b>Olá, tudo bem?</b>
                        </p>
                        <p style="font-family:'Calibri Light', sans-serif !important;font-size:14px;">
                            Recebemos uma solicitação de recuperação de senha para o e-mail em questão. Para confirmar cadastrar sua
                            nova senha,
                            basta <a
                                    href="{{ route('user.recovery', $data['token']) }}">clicar aqui</a>. Caso não tenha solicitado
                            essa ação,
                            favor igrnorar a mensagem.<br>
                        </p>
                        <p style="font-family:'Calibri Light', sans-serif !important;font-size:14px;">Atenciosamente, <br> <b>Adventurer.</b>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding:8px 8px 8px 8px;border-bottom:1px solid #e7e7e7;font-family:'Calibri Light', sans-serif;">
                        <p style="font-size:16px;font-family:'Calibri Light', sans-serif !important;margin-bottom:10px;margin-top:0 !important;">
                            <b>Informações para Contato:</b></p>
                        <p style="font-size:14px;margin:0"><b>E-mail:</b> adventurer.webapp@gmail.com</p>
                        <p style="font-size:14px;margin:8px 0 0 0;"><b>Telefone:</b> (11)97565-4389</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="height:60px;padding:14px;">
                        <div class="table" style="display:table;float:right;text-align:right;margin-right:10px;">
                            <div class="table-row" style="display:table-row">
                                <div class="table-cell" style="display:table-cell">
                                    <a href="" target="_blank">
                                        <img src="{{ $message->embed(asset('img/social-icons/facebook.png')) }}" width="35px"
                                             alt="">
                                    </a>
                                </div>
                                <div class="table-cell" style="display:table-cell">
                                    <a href="" target="_blank">
                                        <img src="{{ $message->embed(asset('img/social-icons/twitter.png')) }}" width="35px" alt="">
                                    </a>
                                </div>
                                <div class="table-cell" style="display:table-cell">
                                    <a href="" target="_blank">
                                        <img src="{{ $message->embed(asset('img/social-icons/github.png')) }}" width="35px" alt="">
                                    </a>
                                </div>
                                <div class="table-cell" style="display:table-cell">
                                    <a href="" target="_blank">
                                        <img src="{{ $message->embed(asset('img/social-icons/linkedin.png')) }}" width="35px"
                                             alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top:12px;font-family:'Calibri Light', sans-serif;font-size:14px;">
                            Icons designed by <a target="_blank" href="https://www.axialis.com/">Axialis</a>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" style="height:20px;background-color:#52738F"></td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>