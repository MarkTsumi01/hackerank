<?php

function extractTagName($tag)
{
    $name  = '';
    $start = isset($tag[1]) && $tag[1] === '/' ? 2 : 1;

    for ($i = $start; isset($tag[$i]); $i++) {
        $char = $tag[$i];

        if ($char === '>' || $char === ' ' || $char === '/') {
            break;
        }

        $name .= $char;
    }

    return $name;
}

function isAllowedTag($tag, $allowedTagNames)
{
    $tagName = extractTagName($tag);

    foreach ($allowedTagNames as $allowedTagName) {
        if ($tagName === $allowedTagName) {
            return true;
        }
    }

    return false;
}

function removeUnwantedTags($htmlString, $allowedTagNames)
{
    $result      = '';
    $tag         = '';
    $isInsideTag = false;

    for ($i = 0; isset($htmlString[$i]); $i++) {
        $char = $htmlString[$i];

        if ($char === '<') {
            $isInsideTag = true;
            $tag         = '<';
        } elseif ($char === '>') {
            $tag        .= '>';
            $isInsideTag = false;

            if (isAllowedTag($tag, $allowedTagNames)) {
                $result .= $tag;
            }

            $tag = '';
        } elseif ($isInsideTag) {
            $tag .= $char;
        } else {
            $result .= $char;
        }
    }

    return $result;
}

$htmlString      = '<div><h2>What is Lorem Ipsum?</h2><h3>What is Lorem Ipsum?</h3><span>What is Lorem Ipsum?</span><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br /> <br />960s with the versions of Lorem Ipsum.</p></div>';
$allowedTagNames = ['p', 'br'];

echo removeUnwantedTags($htmlString, $allowedTagNames);
