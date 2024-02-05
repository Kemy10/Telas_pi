<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/cadastroProdutos.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Cadastro de Produto</title>
</head>

<body>
  <div class="form-container">
    <h1>Cadastro de Produto</h1>
    <form method="POST" action="cadastrarProduto.php" id="formularioCadastro">
      <div class="form-section">
        <label for="product-name">Nome do Produto:<span class="asteristico">*</span> </label>
        <input type="text" id="nome" name="nome" required />

        <label for="product-description">Descrição:<span class="asteristico">*</span></label>
        <textarea id="descricao" name="descricao" required></textarea>

        <label for="product-images">Imagens:</label>
        <input type="file" id="imagens" name="imagens" accept="image/*" multiple />
      </div>
      <div class="separacao">
        <div class="sepa1">
          <div class="form-section">
            <label for="product-category">Categoria:</label>
            <select class="form-select" name="categoria" aria-label="Default select example">
              <option selected>Selecione a categoria do seu produto</option>
              <option value="1">A mudar</option>
              <option value="2">A mudar</option>
              <option value="3">A mudar</option>
              <option value="3">A mudar</option>
              <option value="3">A mudar</option>
              <option value="3">A mudar</option>
              <option value="3">A mudar</option>
            </select>
          </div>
          <div class="separa2">
            <div class="form-inline">
              <div class="form-inline-item">
                <label for="product-stock">Estoque:<span class="asteristico">*</span></label>
                <input type="number" id="estoque" name="estoque" required />
              </div>
              <div class="form-inline-item align-right">
                <label for="product-weight">Peso:<span class="asteristico">*</span></label>
                <input type="text" id="peso" name="peso" />
              </div>
              <div class="form-inline-item align-right">
                <label for="product-price">Valor:<span class="asteristico">*</span></label>
                <input type="text" id="valor" name="valor" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-section">
        <label for="product-expiration">Data de Validade:</label>
        <input type="date" id="validade" name="validade" />

        <label for="product-supplier">Fornecedor:</label>
        <input type="text" id="fornecedor" name="fornecedor" />
      </div>

      <div class="form-section">
        <label for="product-tax-code">Código Fiscal:</label>
        <input type="text" id="codFiscal" name="codFiscal" />

        <label for="product-images">Cód. de Barra:</label>
        <input type="file" id="codBarra" name="codBarra" accept="image/*" multiple />
      </div>
      <br><br>
      <a href="cadastroProdutos.php"><button id="cadastrarProdutos" type="submit">Cadastrar Produto</button></a>

    </form>
  </div>
</body>
<script src="script.js"></script>

</html>