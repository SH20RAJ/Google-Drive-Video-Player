<?php
$apikey = "AIzaSyAHIDPKFSVbDwk-NdlAW8n3uh2q6AJkyAA";
if (isset($_GET['id'])) {
    $id = $_GET['id']; 

} else {
    header('location:index.php') ;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive Video</title>
</head>
<body>

<script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>
<div class="video">
<video id="video-id" width="100%">
    <source src="https://www.googleapis.com/drive/v3/files/<?php echo $id ; ?>?alt=media&key=<?php echo $apikey ; ?>" type="video/mp4" >
</video>
</div>
<script>
    var myFP = fluidPlayer(
        'video-id',	{
	"layoutControls": {
		"controlBar": {
			"autoHideTimeout": 3,
			"animated": true,
			"autoHide": true
		},
		"htmlOnPauseBlock": {
			"html": null,
			"height": null,
			"width": null
		},
		"autoPlay": true,
		"mute": true,
		"allowTheatre": true,
		"playPauseAnimation": true,
		"playbackRateEnabled": true,
		"allowDownload": true,
		"playButtonShowing": true,
		"fillToContainer": false,
		"posterImage": ""
	},
	"vastOptions": {
		"adList": [],
		"adCTAText": false,
		"adCTATextPosition": ""
	}
})
</script>
<style>
    * , body , .video , video {
        padding : 0px ;
        margin : 0px ;
    }
</style>
</body>
</html>