new Vue({
    el: '#app',
    data: {
        context: null,
        canvasWidth: 1200,
        canvasHeight: 600,
        paddleWidth: 10,
        paddleHeight: 100,
        playerY: 150,
        aiY: 150,
        ballX: 400,
        ballY: 200,
        ballRadius: 10,
        ballSpeedX: 5,
        ballSpeedY: 5,
        upPressed: false,
        downPressed: false,
        playerScore: 0,
        aiScore: 0,
    },
    mounted() {
        this.context = this.$refs.gameCanvas.getContext('2d');
        window.addEventListener('keydown', this.keyDownHandler);
        window.addEventListener('keyup', this.keyUpHandler);
        this.gameLoop();
    },
    methods: {
        keyDownHandler(e) {
            if (e.key === 'ArrowUp') {
                this.upPressed = true;
            } else if (e.key === 'ArrowDown') {
                this.downPressed = true;
            }
        },
        keyUpHandler(e) {
            if (e.key === 'ArrowUp') {
                this.upPressed = false;
            } else if (e.key === 'ArrowDown') {
                this.downPressed = false;
            }
        },
        gameLoop() {
            this.update();
            this.draw();
            requestAnimationFrame(this.gameLoop);
        },
        update() {
            // Movimento della racchetta del giocatore
            if (this.upPressed && this.playerY > 0) {
                this.playerY -= 7;
            } else if (this.downPressed && this.playerY < this.canvasHeight - this.paddleHeight) {
                this.playerY += 7;
            }

            // Movimento della racchetta dell'AI
            if (this.aiY + this.paddleHeight / 2 < this.ballY) {
                this.aiY += 5;

            } else if (this.aiY + this.paddleHeight / 2 > this.ballY) {
                this.aiY -= 5;
            }

            // Aggiornamento posizione pallina
            this.ballX += this.ballSpeedX;
            this.ballY += this.ballSpeedY;

            // Collisione con le pareti superiore e inferiore
            if (this.ballY + this.ballRadius > this.canvasHeight || this.ballY - this.ballRadius < 0) {
                this.ballSpeedY = -this.ballSpeedY;
            }

            // Collisione con la racchetta del giocatore
            if (this.ballX - this.ballRadius < this.paddleWidth) {
                if (this.ballY > this.playerY && this.ballY < this.playerY + this.paddleHeight) {
                    this.ballSpeedX = -this.ballSpeedX;
                } else {
                    // Punto per l'AI
                    this.aiScore++;
                    this.resetBall();
                }
            }

            // Collisione con la racchetta dell'AI
            if (this.ballX + this.ballRadius > this.canvasWidth - this.paddleWidth) {
                if (this.ballY > this.aiY && this.ballY < this.aiY + this.paddleHeight) {
                    this.ballSpeedX = -this.ballSpeedX;
                } else {
                    // Punto per il giocatore
                    this.playerScore++;
                    this.resetBall();
                }
            }
        },
        draw() {
            // Pulisci il canvas
            this.context.clearRect(0, 0, this.canvasWidth, this.canvasHeight);

            // Disegna la racchetta del giocatore
            this.context.fillStyle = 'blue';
            this.context.fillRect(0, this.playerY, this.paddleWidth, this.paddleHeight);

            // Disegna la racchetta dell'AI
            this.context.fillStyle = 'red';
            this.context.fillRect(this.canvasWidth - this.paddleWidth, this.aiY, this.paddleWidth, this.paddleHeight);

            // Disegna la pallina
            this.context.beginPath();
            this.context.arc(this.ballX*2, this.ballY*2, this.ballRadius, 0, Math.PI * 2);
            this.context.fillStyle = 'green';
            this.context.fill();
            this.context.closePath();

            // this.context.beginPath();
            // this.context.arc(this.ballX*2, this.ballY*2, this.ballRadius, 0, Math.PI * 2);
            // this.context.fillStyle = 'green';
            // this.context.fill();
            // this.context.closePath();

            // Disegna il punteggio
            this.context.font = '20px Arial';
            this.context.fillText(`Giocatore: ${this.playerScore}`, 50, 20);
            this.context.fillText(`AI: ${this.aiScore}`, this.canvasWidth - 100, 20);
        },
        resetBall() {
            this.ballX = this.canvasWidth / 2;
            this.ballY = this.canvasHeight / 2;
            this.ballSpeedX = -this.ballSpeedX;
        },
    },
});