<?php

function removeUnwantTag(string $htmlString, array $allowTag): string
{
    $isInsideTag = false;
    $result = '';
    $tag = '';
    $htmlStringLength = strlen($htmlString);

    for ($index = 0; $index < $htmlStringLength; $index++) {
        $char = $htmlString[$index];

        if ($char === '<') {
            $isInsideTag = true;
            $tag = '<';
        } elseif ($char === '>') {
            $isInsideTag = false;
            $tag .= '>';
            $isAllowTag = isAllowTag($tag, $allowTag);

            if ($isAllowTag) {
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

function isAllowTag(string $tag, array $allowTagNameList): bool
{
    $tagName = extractTagName($tag);

    foreach ($allowTagNameList as $allowTagName) {
        if ($tagName === $allowTagName) {
            return true;
        }
    }

    return false;
}

function extractTagName(string $tag): string
{
    $name = '';
    $start = 0;
    $tagLength = strlen($tag);

    if ($tag[1] === '/') {
        $start = 2;
    } else {
        $start = 1;
    }

    for ($index = $start; $index < $tagLength; $index++) {
        $char = $tag[$index];

        if ($char === '/' || $char === '>' || $char === ' ') {
            break;
        }

        $name .= $char;
    }

    return $name;
}

$htmlString = '<div><h2>What is Lorem Ipsum?</h2><h3>What is Lorem Ipsum?</h3><span>What is Lorem Ipsum?</span><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br /> <br />960s with the versions of Lorem Ipsum.</p></div>';
$allowTagNameList = ['br', 'p'];

$result = removeUnwantTag($htmlString, $allowTagNameList);

echo $result;
