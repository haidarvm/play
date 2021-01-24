<?php
// Start the output buffer
ob_start();
ob_implicit_flush(0);

// Output stuff here...

echo "haidar";
// Get the contents of the output buffer   
$contents = ob_get_contents();
ob_end_clean();

// Tell the browser that they are going to get gzip data
// Of course, you already checked if they support gzip or x-gzip
// and if they support x-gzip, you'd change the header to say
// x-gzip instead, right?
header("Content-Encoding: gzip");

// Display the header of the gzip file
// Thanks ck@medienkombinat.de!
// Only display this once
echo "\x1f\x8b\x08\x00\x00\x00\x00\x00";

// Figure out the size and CRC of the original for later
$Size = strlen($contents);
$Crc = crc32($contents);

// Compress the data
$contents = gzcompress($contents, 9);

// We can't just output it here, since the CRC is messed up.
// If I try to "echo $contents" at this point, the compressed
// data is sent, but not completely.  There are four bytes at
// the end that are a CRC.  Three are sent.  The last one is
// left in limbo.  Also, if we "echo $contents", then the next
// byte we echo will not be sent to the client.  I am not sure
// if this is a bug in 4.0.2 or not, but the best way to avoid
// this is to put the correct CRC at the end of the compressed
// data.  (The one generated by gzcompress looks WAY wrong.)
// This will stop Opera from crashing, gunzip will work, and
// other browsers won't keep loading indefinately.
//
// Strip off the old CRC (it's there, but it won't be displayed
// all the way -- very odd)
$contents = substr($contents, 0, strlen($contents) - 4);

// Show only the compressed data
echo $contents;

// Output the CRC, then the size of the original
gzip_PrintFourChars($Crc);
gzip_PrintFourChars($Size);


// Done.  You can append further data by gzcompressing
// another string and reworking the CRC and Size stuff for
// it too.  Repeat until done.


function gzip_PrintFourChars($Val)
{
    for ($i = 0; $i < 4; $i ++)
    {
        echo chr($Val % 256);
        $Val = floor($Val / 256);
    }
}
?>