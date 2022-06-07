<!-- melakukan perulangan sebanyak 6 kali dengan for  -->
    @for ($i = 0; $i <= 5; $i++)
        <!-- panjang card adalah 4 kolom dari 12 kolom  -->
        <!-- mt-4 adalah singkatan dari margin-top 4  -->
        <div class="col-4 mt-4">
            <div class="card">
                <img class="card-img-top" height="200px"
                    src="https://1.bp.blogspot.com/-zaWp0y_Ek_I/WLpi66wU8HI/AAAAAAAABHk/pwKb9VfFo7sskRiADBWtV0MkIoEYox0YgCLcB/s1600/bot.jpeg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Lorem Ipsum Dolor Sit Amet</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    @endfor