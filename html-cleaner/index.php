<?php

$html_text = "
    <img alt=\"image\" src=\"https://tr.rbxcdn.com/510e52c092a0ca47ee92b0858b1bd329/150/150/AvatarHeadshot/Png\"/>
    <strong>My profile on Roblox</strong>
    LiMeR_lp";

echo strip_tags(htmlspecialchars(trim($html_text)));