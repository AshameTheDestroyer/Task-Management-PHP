<?php
function InputField(
    string $id,
    string $name = null,
    string $label = null,
    string $type = "text",
    string $value = null,
    bool $isOptional = false,
    int $maxLength = -1,
) {
    $name ??= str_ireplace("-", "_", $id);
    $label ??= $name;
    $id .= "-field";

    $isRequired = $isOptional ? "" : "required";
    $dataOptional = $isOptional ? "data-optional" : "";
    $maxLength = $maxLength != -1 ? "maxlength='{$maxLength}'" : "";
    $value = $value != null ? "value='{$value}'" : "";

    if ($type == "hidden") {
        return "<input id='{$id}' type='{$type}' name='{$name}' {$value} />";
    }

    return
        "<div class='input-field' {$dataOptional}>" .
        "   <label for='{$id}'>{$label}</label>" .
        "   <input id='{$id}' type='{$type}' name='{$name}' {$isRequired} {$maxLength} {$value} />" .
        "</div>";
}
?>