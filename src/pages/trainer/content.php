<h1 class="visually-hidden">Vokabeltrainer</h1>
<form action="/index.php?vocab=<?php
if ($vocabIndex == count($vocabs) - 1) {
    echo 0;
} else {
    echo $vocabIndex + 1;
}
?>" method="post">
    <div class="px-4 py-5 my-5 text-center w-50 mx-auto">
        <?php if (isset($messageboxClass)) { ?>
            <div class="alert alert-<?php echo $messageboxClass; ?> d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label=":"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div> <?php echo $messageboxText ?>

                </div>
            </div>
        <?php } ?>
        <h1 class="display-5 fw-bold"> <?php echo $vocabToDisplay['word']; ?></h1>
        <div class="col-lg-6 mx-auto">

            <label for="translation">Übersetzung:</label>
            <input type="text" name="translation" value="">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-2 flex-row-reverse">
                <button name="weiter"type="submit" class="btn btn-primary btn-lg px-4 gap-3">weiter</button>
                <button name="skip" value="1" type="submit" class="btn btn-outline-secondary btn-lg px-4">überspringen</button>
            </div>
        </div>
    </div>
</form>
