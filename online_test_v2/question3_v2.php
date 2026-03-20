<?php
function removeUnwantedTag(string $htmlString, array $allowTagNameList): string
{
    $isInsideTag      = false;
    $result           = '';
    $tag              = '';
    $htmlStringLength = strlen($htmlString);

    for ($index = 0; $index < $htmlStringLength; $index++) {
        $char = $htmlString[$index];

        if ($char === '<') {
            $isInsideTag = true;
            $tag         = '<';

            continue;
        }

        if ($char === '>') {
            $isInsideTag = false;
            $tag .= '>';
            $result  = appendTagIfAllowed($result, $tag, $allowTagNameList);
            $tag  = '';

            continue;
        }

        if ($isInsideTag) {
            $tag .= $char;

            continue;
        }

        $result .= $char;
    }

    return $result;
}

function appendTagIfAllowed(string $result, string $tag, array $allowTagNameList): string
{
    $isAllowTag = isAllowTagName($tag, $allowTagNameList);
    
    if ($isAllowTag) {
        $result .= $tag;
    }

    return $result;
}

function isAllowTagName(string $tag, array $allowTagNameList): bool
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
    $name      = '';
    $tagLength = strlen($tag);
    $isClosingTag = ($tag[1] === '/');
    $start     = ($isClosingTag ? 2 : 1);

    for ($index = $start; $index < $tagLength; $index++) {
        $char      = $tag[$index];
        $isNameEnd = ($char === '/' || $char === '>' || $char === ' ');

        if ($isNameEnd) {
            break;
        }

        $name .= $char;
    }

    return $name;
}

$htmlString       = '<div><h2>What is Lorem Ipsum?</h2><h3>What is Lorem Ipsum?</h3><span>What is Lorem Ipsum?</span><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br /> <br />960s with the versions of Lorem Ipsum.</p></div>';
$allowTagNameList = ['br', 'p'];
$result           = removeUnwantedTag($htmlString, $allowTagNameList);

echo $result;
