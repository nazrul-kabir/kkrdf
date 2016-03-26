<?php
$contact_name = '';
$contact_email = '';
$contact_subject = '';
$contact_message = '';
if (isset($_POST['btnSave'])) {
    extract($_POST);
    $contact_name = validateInput($contact_name);
    $contact_email = validateInput($contact_email);
    $contact_subject = validateInput($contact_subject);
    $contact_message = validateInput($contact_message);
    $custom_array = '';
    $custom_array .= 'contact_name = "' . $contact_name . '"';
    $custom_array .= ',contact_email = "' . $contact_email . '"';
    $custom_array .= ',contact_subject = "' . $contact_subject . '"';
    $custom_array .= ',contact_message = "' . $contact_message . '"';


    $sql = "INSERT INTO contact SET $custom_array";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $success = "Thank you for your query. We will get back to you soon";
        $contact_name = '';
        $contact_email = '';
        $contact_subject = '';
        $contact_message = '';
    } else {
        $error = "Something went wrongF";
    }
}
?>
<div class="col-sm-8 col-md-4 skill-wrapper wow fadeIn" data-wow-delay=".8s">
    <h1 class="section-title wow fadeInUp animated" style="visibility: visible;">LEAVE A MESSAGE</h1>
    <div class="col-md-12 contact-form wow fadeIn" data-wow-delay=".2s">
        <?php include './message.php'; ?>
        <form role="form" method="POST">
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control radius-input" id="contact_name" name="contact_name" placeholder="Enter Name" value="<?php echo $contact_name; ?>" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control radius-input" id="contact_email" name="contact_email" placeholder="Enter Email" value="<?php echo $contact_email; ?>" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control radius-input" id="contact_subject" name="contact_subject" placeholder="Enter Subject" value="<?php echo $contact_subject; ?>" required />
                </div>
            </div>
            <div class="form-group col-sm-12">
                <textarea id="contact_message" name="contact_message" class="form-control flat-input" rows="11" placeholder="Enter Message"><?php echo $contact_message; ?></textarea>
            </div>
            <button type="submit" id="form-submit" name="btnSave" class="btn btn-common btn-lg">Send</button>
        </form>
    </div>
</div>