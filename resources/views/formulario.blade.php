<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Contato</title>
  <!-- Link para o CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link para o CSS do Bootstrap Icons (opcional, para ícones) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Link para o CSS do Bootstrap Toggle (para o switch) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap5-toggle/css/bootstrap5-toggle.min.css" rel="stylesheet">
  <style>
    .form-control:disabled,
    .form-control[readonly] {
      background-color: #f8f9fa;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <h2>Formulário de Contato</h2>
    <form action="/cadastrar-contato" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
      </div>
      <div class="mb-3">
        <label for="origem" class="form-label">Origem</label>
        <select class="form-select" id="origem" name="origem" required>
          <option value="fixo">Telefone Fixo</option>
          <option value="celular">Celular</option>
          <option value="whatsapp">WhatsApp</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="observacoes" class="form-label">Observações</label>
        <textarea class="form-control" id="observacoes" name="observacoes" rows="3"
          placeholder="Digite suas observações" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <!-- Scripts do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Scripts do Bootstrap Toggle (para o switch) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap5-toggle/js/bootstrap5-toggle.min.js"></script>
  <script>
    // Máscara para o campo de telefone
    document.getElementById('telefone').addEventListener('input', function (e) {
      let value = e.target.value.replace(/\D/g, '');
      if (value.length <= 10) {
        e.target.value = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
      } else {
        e.target.value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
      }
    });
  </script>
</body>

</html>