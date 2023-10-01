<?php include("inc/header.php") ?>
<?php include("inc/nav.php") ?>
<?php session_start(); ?>
    <style>
    .text {
        margin: auto;
        width: 60%;
        border: 3px solid #0f0e0f;
        padding: 10px;
        text-align: justify;

    }

    .center {
        text-align: center;
        font-family: 'Times New Roman', serif;
    }

    .double-underline {
        border-bottom: 1px solid;
        text-decoration: underline;
    }
</style>
<br>
<h2 class="center"><span class="double-underline">Welcome to your friendly Encryption/Decryption site</span></h2>
<br>
<div class="text">
    <h3>Description:-</h3>
    <p>
        In this site we are going to Encrypt and Decrypt using <b>AES</b> Algorithm and <b>CBC , CTR , ECB </b> modes of operation
        with <b>128,192,256</b> block size
    </p>
</div>
<br>
<div class="text">
    <h3>How To Use :-</h3>
    <p>
        Simply go to the left of the <b>navigation bar</b> , you will see <b>Encryption</b> & <b>Decryption</b> choose what you desire.<br>
    <div>
        <dl>
            <dt>In Encryption you need to :</dt>
            <dd>-Upload the file you wanna encrypt</dd>
            <dd>-specify the key you wanna Encrypt with </dd>
            <dd>-specify the Mode of operation</dd>
            <dd>-specify the Block size </dd>
            <dt>In Decryption you need to :</dt>
            <dd>-Upload the file you wanna decrypt</dd>
            <dd>-specify the key you have encrypted with </dd>
            <dd>-specify the Mode of operation you used before</dd>
            <dd>-specify the Block size you used before </dd>
        </dl>
    </div>
    </p>
</div>

<?php include("inc/footer.php") ?>