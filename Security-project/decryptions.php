<?php include("inc/header.php") ?>
<?php include("inc/nav.php") ?>
<?php session_start(); ?>
<style>
    .center {
        margin: auto;
        width: 70%;
        border: 3px solid black;
        padding: 10px;
        text-align: justify;
    }

    .center_headline {
        text-align: center;
        font-family: 'Times New Roman', serif;
    }

    .double-underline {
        border-bottom: 1px solid;
        text-decoration: underline;
    }
</style>

<h2 class="center_headline"><span class="double-underline">Decryption</span></h2>
<br>

<div class="container">
    <form method="POST" class="center" action="functions/decryption.php" enctype="multipart/form-data">
        <div class="row">
            <p><strong>Note:-</strong>Be sure to use the same characteristics you used before to decrypt your file right. </p>
        </div>
        <div class="row g-4 align-items-center">
            <div class="mb-2">
                <label class="form-label" for=" file">Upload your file :-</label>
                <input type="file" class="form-control-file" name="FileToDecrypt" required>
            </div>
            <div class="mb-2">
                <label class="form-label" for=" key">The key:-</label>
                <input type="text" class="form-control " name="DecryptionKey" placeholder="Same key you used before" required>
            </div>
            <div class="mb-2">
                <label class="form-label" for="mode">Mode :-</label>
                <select class="form-select" id="mode" name="Mode" required>
                    <option value="" disabled hidden selected>Select your mode of operation</option>
                    <option value="ecb" name="ecb">ECB</option>
                    <option value="cbc" name="cbc">CBC</option>
                    <option value="ctr" name="ctr">CTR</option>
                </select>
            </div>
            <div class="mb-2">
                <label class="form-label" for="key-size">Key size:-</label>
                <select class="form-select " name="KeySize"id="key-size" required>
                    <option value="" disabled selected hidden>Choose a key size </option>
                    <option value="128">128-bit(16-chars)</option>
                    <option value="192">192-bit(24-chars)</option>
                    <option value="256">256-bit(32-chars)</option>
                </select>
            </div>
            <div style="text-align:center ">
                <button type="submit" class="btn btn-dark mb-2">Decrypt</button>
            </div>
        </div>
    </form>
</div>



</div>
<?php include("inc/footer.php") ?>