const
    words = document.querySelector('[name="words"]'),
    count = document.querySelector('.count'),
    level = document.querySelector('.level'),
    clear = document.querySelector('.clear')

words.focus()
words.setSelectionRange(words.value.length, words.value.length)

const main = () => {
    level.innerText = countWords(words.value) > 0 ? 
        Math.floor(Math.log(countWords(words.value))) : 0

    count.innerText = countWords(words.value)

}

function countWords(str) {
    const array = str.trim().split(/\s+/);

    return array[0] === "" ? 0 : array.length
}

main();
words.oninput = main;

clear.onclick = () => {
    words.value = ''
    main()
}