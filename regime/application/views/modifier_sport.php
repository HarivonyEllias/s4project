<!DOCTYPE html>
<html>
<head>
<style>
  form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 4px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  input[type="text"],
  textarea,
  input[type="number"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
    font-size: 14px;
  }

  textarea {
    height: 100px;
  }

  button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  button[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
    <form method="get" action="<?php echo site_url('Sport_controller/update_sport') ?>">
        <input type="hidden" name="idSport" value="<?php echo $_GET['idSport']; ?>">
        <div>
            <label for="menu">Nom :</label>
            <input type="text" id="menu" name="nom" value="<?php echo $_GET['nom']; ?>">
        </div>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
