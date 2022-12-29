<div class="modal fade" id="editPostModal" tabindex="-1" data-keyboard="false" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

    </div>
</div>
<style></style>
<script>
    function readURLS(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(".file-up-image").attr("src", e.target.result);
                $(".upload-content-file").addClass("show");
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            removeUploadS();
        }
    }

    function removeUploadS() {
        $(".file-upload-img").replaceWith($(".file-upload-img").clone());
        $(".upload-content-file").removeClass("show");
    }

    $(".upload-content-file").bind("dragover", function() {
        $(".upload-content-file").addClass("image-dropping");
    });
    $(".upload-content-file").bind("dragleave", function() {
        $(".upload-content-file").removeClass("image-dropping");
    });
</script>



