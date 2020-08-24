<?php
/*
$pars = array("numero_contrato" => "CRT. 3154", 
                             "nome_cliente"    => "Eliseu", 
                             "nome_usuario"    => "Edemir", 
                             "usuario_logado"  => "Vitor",
                             "mensagem" => "Gostaria de saber como está o contrato YZW.");
*/
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    
    <style>
    .invoice-box {
        max-width: 1000px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td>
                    <table>
                        <tr>
                           
                            
                            <td align="left">
                                <span class="title" style="font-size: 25px">Olá <?php echo $pars["nome_usuario"]; ?>.</span>
                                <br><br>
                                <p>
                                    Este e-mail foi enviado por <?php echo $pars["usuario_logado"]; ?> 
                                referente ao contrato <?php echo $pars["numero_contrato"]; ?>.
                                </p>
                                

                                <p>Mensagem: </p>
                                <p><?php echo $pars["mensagem"]; ?></p>
                                <br>

                                <p align="right">Att.: Equipe Fleet</p> 

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
    </div>
</body>
</html>