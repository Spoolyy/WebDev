document.addEventListener('DOMContentLoaded', () => {
    const yourScore = document.getElementById('yourScore')
    const converterButton = document.getElementById('converter')
    const yourConvertedScore = document.getElementById('result')

    converterButton.addEventListener('click', () => {
        const grade = parseInt(yourScore.value)
        let score = ''
        switch (true) {
            case (grade >= 93 && grade <= 100):
                score = 'A+'
                break
            case (grade < 93 && grade >= 85):
                score = 'A'
                break
            case (grade < 85 && grade >= 78):
                score = 'B'
                break
            case (grade < 78 && grade >= 70):
                score = 'C'
                break
            case (grade < 70 && grade >= 60):
                score = 'D'
                break
            case (grade < 60 && grade >= 55):
                score = 'E'
                break
            case (grade < 55 && grade >= 0):
                score = "F, as in you Failed"
                break
            default:
                window.alert("please insert a valid score")
        }
        yourConvertedScore.textContent = 'Your grade is: ' + score
    })
})