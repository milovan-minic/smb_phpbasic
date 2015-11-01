<?php

$tekst = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sćrambled it
to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets ćontaining
 Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$recenice = explode(".", $tekst);

for($i=0; $i<count($recenice); $i++) {
    if (strpos($recenice[$i], "ć")) {
        echo "U rečenici broj " . ($i+1) . " slovo ć je zamenjeno slovom c.<br />";
    }
}
