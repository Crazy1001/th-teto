function fallbackCopyTextToClipboard(text) {
    const textArea = document.createElement('textarea');
    textArea.value = text;

    // Avoid scrolling to bottom
    textArea.style.top = '0';
    textArea.style.left = '0';
    textArea.style.position = 'fixed';

    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
        const successful = document.execCommand('copy');
        // const msg = successful ? 'successful' : 'unsuccessful';
        // console.log(`Fallback: Copying text command was ${msg}`);

        const msg = successful ? 0 : -1;

        document.body.removeChild(textArea);

        return msg;
    } catch (err) {
        // console.error('Fallback: Oops, unable to copy', err);

        return -1;
    }
}

function copyTextToClipboard(text) {
    if (!navigator.clipboard) {
        const response = fallbackCopyTextToClipboard(text);

        return response;
    }

    // navigator.clipboard.writeText(text).then(
    //     () => {
    //         console.log('Async: Copying to clipboard was successful!');
    //     },
    //     (err) => {
    //         console.error('Async: Could not copy text: ', err);
    //     },
    // );
    navigator.clipboard.writeText(text).then(
        () => 0,
        (err) => {
            console.error('Async: Could not copy text: ', err);
            return -1;
        },
    );
}
