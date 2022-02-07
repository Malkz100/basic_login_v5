function validate_upload ( )
{
	valid = true;

        if ( document.upload.file.value == "" )
        {
                alert ( "Please browse for a photo to upload first." );
                valid = false;
        }

        return valid;
}

function confirm_delete( )
{
	return confirm('Are you sure you want to delete this member?')
}