function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function(e) {
            $('#viewImg').attr("src", e.target.result)
                // $('#uploadForm + img').remove();
                // $('#uploadForm').after('<img src="' + e.target.result + '" width="450" height = "300" / > ');
        }
    }
}


$("#file").change(function() {
    filePreview(this);
});