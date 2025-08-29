<?php include "../inc/dbinfo.inc"; ?>
<!doctype html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Demo RDS + PHP</title>
	<style>
		body {
			font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
			margin: 40px;
		}
		a {
			display: inline-block;
			margin: 8px 0;
		}
		table {
			border-collapse: collapse;
			margin-top: 16px;
		}
		td, th {
			border: 1px solid #999;
			padding: 6px 10px;
		}
		.card {
			border: 1px solid #ddd;
			border-radius: 12px;
			padding: 16px;
			max-width: 700px;
		}
		.muted {
			color: #555;
		}
	</style>
</head>

<body>
  <div class="card">
    <h1>Aplicação de exemplo (Apache + PHP + MySQL RDS)</h1>
      <p class="muted">Use os links abaixo para testar as páginas.</p>
      <ul>
        <li>
          <a href="/SamplePage.php">Employees (página do tutorial)</a>
        </li>
        <li>
          <a href="/clientes.php">Clientes (tabela extra: criar + listar)</a>
        </li>
      </ul>
  </div>
</body>
</html>

<?php include "../inc/dbinfo.inc"; ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo RDS + PHP</title>
    <style>
      body {
        font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        margin: 40px;
      }
      a {
        display: inline-block;
        margin: 8px 0;
      }
      table {
        border-collapse: collapse;
        margin-top: 16px;
      }
      td,
      th {
        border: 1px solid #999;
        padding: 6px 10px;
      }
      .card {
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 16px;
        max-width: 700px;
      }
      .muted {
        color: #555;
      }
    </style>
  </head>
  <body>
    <div class="card">
      <h1>Aplicação de exemplo (Apache + PHP + MySQL RDS)</h1>
      <p class="muted">Use os links abaixo para testar as páginas.</p>
      <ul>
        <li>
          <a href="/SamplePage.php">Employees (página do tutorial)</a>
        </li>
        <li>
          <a href="/clientes.php">Clientes (tabela extra: criar + listar)</a>
        </li>
      </ul>
    </div>
  </body>
</html>
