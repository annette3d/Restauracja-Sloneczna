document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".color-button");
    const paragraph = document.getElementById("dynamicParagraph");
    const fontSizeInput = document.getElementById("fontSize");
    const fontStyleSelect = document.getElementById("fontStyle");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            const color = button.getAttribute("data-color");
            paragraph.style.color = color;

            const fontSize = fontSizeInput.value || 100;
            paragraph.style.fontSize = `${fontSize}%`;

            const fontStyle = fontStyleSelect.value;
            paragraph.style.fontStyle = fontStyle;
        });
    });
});
