<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotemig_fit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <h2>Cadastro de Aluno</h2>

    <?php require("conexao.php");?>

<div class ="container">
    <form action = "create.php" method = "POST">
  <div class="form-group">
    <label >nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="informe o nome">
    <label >email</label>
    <input type="email" class="form-control" id="email"  name="email" placeholder="informe o Email">
    
    <label >sexo: </label>
    
    <input type="radio" id="M" name="sexo" value="M">
    <label for="masculino">Masculino</label><br>

    <input type="radio" id="F" name="sexo" value="F">
    <label for="css">Feminino</label><br>

    <label >Endereço</label>
    <input type="text" class="form-control" id="end" name = "endereco"  placeholder="informe o endereco">
    <label >Número</label>
    <input type="text" class="form-control" id="numero" name = "numero" placeholder="informe o Número">
    <label >Complemento</label>
    <input type="text" class="form-control" id="complemento" name = "complemento" placeholder="informe o Complemento">
    <label >Bairro</label>
    <input type="text" class="form-control" id="Bairro" name = "bairro" placeholder="informe o Bairro">
    <label >Cidade</label>
    <input type="text" class="form-control" id="cidade" name = "cidade" placeholder="informe a Cidade">

    <label >UF</label>
  <select id="estado" name="estado">
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    <option value="EX">Estrangeiro</option>
    </select>


    <label >Modalidade</label>
    <select id="modalidade" name="modalidade">
    <option value="Pilates">Pilates</option>
    <option value="Musculação">Musculação</option>
    <option value="Natação">Natação</option>
    <option value="zumba">Zumba</option>

    
</select>
  </div>

 
  
  

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>