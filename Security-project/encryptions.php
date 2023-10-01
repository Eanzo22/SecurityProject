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

<h2 class="center_headline"><span class="double-underline">Encryption</span></h2>
<br>

<div class="container">
    <form action="functions/encryption.php" method="post" class="center" enctype="multipart/form-data">
        <div class="row">
            <p><strong>Note:- </strong>Since i didn't figure out yet how to fill up key's safely i highly recommend to use key's as follows </p>
        </div>
        <div>
            <dl>
                <dd>-<b>for 128-bit key size </b> use exactly 16-chars </dd>
                <dd>-<b>for 192-bit key size </b> use exactly 24-chars </dd>
                <dd>-<b>for 256-bit key size </b> use exactly 32-chars </dd>
            </dl>
        </div>
        <div class="row g-4 align-items-center">
            <div class="mb-2">
                <label class="form-label" for=" file">Upload your file :-</label>
                <input type="file" class="form-control-file" name="FileToEncrypt" id="FileToEncrypt" required>
            </div>
            <div class="mb-2">
                <label class="form-label" for=" key">The key:-</label>
                <input required type="text" class="form-control " name="EncryptionKey" placeholder="stick to the rules above">
            </div>
            <div class="mb-2">
                <label class="form-label" for="mode">Mode :-</label>
                <select class="form-select" name="Mode" id="mode" required>
                    <option value="" disabled hidden selected>Select your mode of operation</option>
                    <option value="ecb">ECB</option>
                    <option value="cbc">CBC</option>
                    <option value="ctr">CTR</option>
                </select>
            </div>
            <div class="mb-2">
                <label class="form-label" for="key-size">Key size:-</label>
                <select class="form-select " id="key-size" required name="KeySize">
                    <option value="" disabled selected hidden>Choose a key size </option>
                    <option value="128">128-bit(16-chars)</option>
                    <option value="192">192-bit(24-chars)</option>
                    <option value="256">256-bit(32-chars)</option>
                </select>
            </div>
            <div style="text-align:center ">
                <button type="submit" name="submit" value="upload" class="btn btn-dark mb-2">Encrypt</button>
            </div>
        </div>
    </form>
</div>

<?php include("inc/footer.php") ?>