export default class FormValidator {
    /**
     * 
     * @param {HTMLFormElement} form 
     * @param {string} cssQueryInput 
     * @param {string} cssQueryError 
     */
    static validate(form, cssQueryInput, cssQueryError) {
        const inputs = form.querySelectorAll(cssQueryInput)
        const errorSpans = form.querySelectorAll(cssQueryError)

        form.addEventListener('submit', function (e) {
            // reset error display
            errorSpans.forEach(e => {
                if (!e.classList.toString().includes('hideTag')) {
                    e.classList.toggle('hideTag')
                }
            })

            for (let i = 0; i <= inputs.length; i++) {
                if (!inputs[i].value || inputs[i].value === 'default') {
                    e.preventDefault() // stop form sending

                    errorSpans[i].classList.toggle('hideTag') // display error message
                    return // stop for looping
                }
            }
        })

    }
}