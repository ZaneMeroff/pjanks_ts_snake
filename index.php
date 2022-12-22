<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.TSnake</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <main class="app-wrapper">
      <section class="mobile-modal modal hidden">
        <p class="mobile-paragraph">
          This game is not currently supported on touchscreen devices. I'm sorry :/
        </p>
        <span class="link-to-github-wrapper">
          View the source code, or open an issue or PR on <a class="link-to-github" href="https://github.com/pJanks/tsnake" target="_blank"">Github</a>.
        </span>
      </section>
      <section class="snake-game-wrapper section-wrapper snake">
        <section class="heading-and-canvas-wrapper">
          <section class="snake-heading-and-timer-wrapper">
            <h4 class="snake-heading subheading">
              .TSNAKE: RED && BLUE PILLS
            </h4>
            <span class="timer">00:00:00</span>
          </section>
          <canvas class="snake-game-canvas" tabindex="1" width="600" height="350">
            Your browser does not support HTML canvas.
          </canvas>
        </section>
        <section class="snake-game-buttons-wrapper">
          <button class="start-or-reset-game-button game-button">Start</button>
          <button class="view-instructions-button game-button">Instructions</button>
          <button class="view-hi-scores-button game-button">High Scores</button>
        </section>
        <span class="link-to-github-wrapper">
          View the source code, or open an issue or PR on <a class="link-to-github" href="https://github.com/pJanks/tsnake" target="_blank"">Github</a>.
        </span>
      </section>
      <section class="game-instructions-modal modal hidden">
        <p class="game-instructions-paragraph">
          The game can be started by clicking the 'Start' button. Upon 'GAME OVER', the board can be reset by clicking the 'Reset' button, and a new game can be intialized by, again, clicking the 'Start' button. You can move left with the 'A' key, up with the 'W' key, right with the 'D' key, and down with the 'S' key, or you can use the corresponding arrow keys. The objective is to consume as many of the pills as possible without colliding with the walls or with your own tail. Good luck!
        </p>
        <button class="close-instructions-button game-button">Close</button>
        <span class="link-to-github-wrapper">
          View the source code, or open an issue or PR on <a class="link-to-github" href="https://github.com/pJanks/tsnake" target="_blank"">Github</a>.
        </span>
      </section>
      <section class="hi-scores-modal modal hidden">
        <table class="hi-scores-table">
          <thead>
            <tr>
              <th class="hi-scores-table-header" colspan="1">High Scores</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-0"></td>
            </tr>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-1"></td>
            </tr>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-2"></td>
            </tr>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-3"></td>
            </tr>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-4"></td>
            </tr>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-5"></td>
            </tr>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-6"></td>
            </tr>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-7"></td>
            </tr>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-8"></td>
            </tr>
            <tr class="hi-scores-table-row">
              <td class="hi-scores-table-data table-data-9"></td>
            </tr>
          </tbody>
        </table>
        <button class="close-hi-scores-button game-button">Close</button>
        <span class="link-to-github-wrapper">
          View the source code, or open an issue or PR on <a class="link-to-github" href="https://github.com/pJanks/tsnake" target="_blank"">Github</a>.
        </span>
      </section>
      <section class ="game-over-modal modal hidden">
        <h2 class="game-over-text">GAME OVER!</h2>
        <h2 class="user-score-text">
          YOUR SCORE: <span class="final-score"></span>
        </h2>
        <button class="close-game-over-button game-button">Close</button>
        <span class="link-to-github-wrapper">
          View the source code, or open an issue or PR on <a class="link-to-github" href="https://github.com/pJanks/tsnake" target="_blank"">Github</a>.
        </span>
      </section>
    </main>
  </body>
  <script src="build/scripts"></script>
</html>
