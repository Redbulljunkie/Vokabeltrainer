<div class="px-4 py-5 my-5 text-center w-50 mx-auto">

    <main class="form-signin w-100 m-auto">
        <form action="/index.php?page=manage" method="post">

            <h1 class="h3 mb-3 fw-normal">Bitte trage deine Vokabeln hier ein:</h1>
         <?php if(isset($errortext)){ ?>
            <div class="alert alert-danger"  role="alert">
                <?php echo $errortext ?>
            </div>
         <?php } ?>
            <div class="form-floating">
                <input type="text" class="form-control" name= "word" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Vokabel</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name= "translation" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Übersetzung</label>
            </div>

            <div class="checkbox mb-3">
                <label>

                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" name="add" type="submit">hinzufügen</button>

            <table class="table table-striped px-4 py-5 my-5 text-center w-50 mx-auto">

                <tr>
                    <th>Vokabel</th> 
                    <th>Übersetzung</th>
                    <th>Löschen<th>
                </tr>
                <?php foreach ($vocabs as $vocab) { ?>
                    <tr>
                        <td><?php echo $vocab['word'] ?></td>
                        <td><?php echo $vocab['translation'] ?></td>
                        <td><a href="/index.php?page=manage&delete=<?php echo $vocab['id']?>">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></a><td>
                    </tr><?php } ?>
            </table>
        </form>
    </main>





</div>