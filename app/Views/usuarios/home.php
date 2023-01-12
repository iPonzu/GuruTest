<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="form.ico" type="image/x-icon">
    <title>GuruTest</title>
</head>
<body>
<h3>Um teste onde devem ser imprimidos números de 1 a 100, onde os múltiplos de 3 serão substituídos por "Guru", os de 5 por "IT", e de ambos por "Gurus"</h3>

<p class="desc"> O projeto deve ser desenvolvido com o uso do framework Codeigniter, para melhor análise de MVC </p> 

<p class="num"> Vamos aos números abaixo: </p>
    <div class="quadro">
        <div class="code">
        <?php
        $outputs = array(15 => "Gurus", 5 => "IT", 3 => "Guru");
        for ($i = 1; $i <= 100; $i++) {
        $result = $i;
        foreach ($outputs as $key => $value) {
            if ($i % $key == 0) {
                $result = $value;
                break;
            }
        }
        echo $result;
        echo "<br>";
        }
        ?>
        </div> 
    </div>
</body>
</html>


<!-- stylesheet !-->
<style>
h3
{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
body
{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background-color: blueviolet; 
}
.code
{
    font-size: 15px;
}
.num
{
    font-weight: bolder;
    font-size: 20px;
}
.quadro
{
    position: absolute;
    width: 900px;
    height: 2000px;
    background-color: #000000;
    top: 125px;
    left: 300px;
    background: #1adeec59;
    box-shadow: 0 8px 32px 0 rgba(1, 51, 70, 0.369);
    backdrop-filter: blur( 13.5px );
    -webkit-backdrop-filter: blur( 13.5px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
    box-shadow: 1px 1px 14px rgba(0, 0, 0, 14);
    font-weight: bold;
}
.desc
{
    font-size: 20px;
}
</style>