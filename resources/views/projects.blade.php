@extends('layouts.master')

@section('content')
  <section class="section">
        <div class="container">
            <div class="content">
                <h1 class="title">Projects</h1>
                <hr>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src={{ URL::asset('images/schmoogle.png') }} alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Schmoogle</p>
                                </div>
                            </div>

                            <div class="content">
                                Scheduling app inspired by doodle.com
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href='http://schmoogle.herokuapp.com/' target='_blank' class="card-footer-item">
                                <span class="icon"><i class="fa fa-laptop"></i></span>
                            </a>
                            <a href='https://github.com/jameslieu/schmoogle' target='_blank' class="card-footer-item">
                                <span class="icon "><i class="fa fa-github"></i></span>
                            </a>
                        </footer>
                    </div>

                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src={{ URL::asset('images/sudoku.png') }} alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Sudoku</p>
                                </div>
                            </div>

                            <div class="content">
                                A sudoku game built in Sinatra
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href='http://sudoku-online-24601.herokuapp.com/' target='_blank' class="card-footer-item">
                                <span class="icon"><i class="fa fa-laptop"></i></span>
                            </a>
                            <a href='https://github.com/jameslieu/sudoku_online' target='_blank' class="card-footer-item">
                                <span class="icon "><i class="fa fa-github"></i></span>
                            </a>
                        </footer>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src={{ URL::asset('images/lightbulb.png') }} alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Lightbulb Calculator</p>
                                </div>
                            </div>

                            <div class="content">
                                A simple lightbulb calculation tool
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href='http://www.jameslieu.co.uk/projects/lightbulb-calculator/index.html' target='_blank' class="card-footer-item">
                                <span class="icon"><i class="fa fa-laptop"></i></span>
                            </a>
                            <a href='https://github.com/jameslieu/lightbulb_calculator' target='_blank' class="card-footer-item">
                                <span class="icon "><i class="fa fa-github"></i></span>
                            </a>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src={{ URL::asset('images/forecast.png') }} alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Forecast</p>
                                </div>
                            </div>

                            <div class="content">
                                Displays the forecast of the city you enter.
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href='http://jameslieu.co.uk/projects/weather-forecast/index.php' target='_blank' class="card-footer-item">
                                <span class="icon"><i class="fa fa-laptop"></i></span>
                            </a>
                            <a href='https://github.com/jameslieu/weather-forecast' target='_blank' class="card-footer-item">
                                <span class="icon "><i class="fa fa-github"></i></span>
                            </a>
                        </footer>
                    </div>

                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src={{ URL::asset('images/rental-yield.png') }} alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Rental-yield</p>
                                </div>
                            </div>

                            <div class="content">
                                Calculate yearly yield of rent for properties.
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href='http://rental-yield-24601.herokuapp.com/' target='_blank' class="card-footer-item">
                                <span class="icon"><i class="fa fa-laptop"></i></span>
                            </a>
                            <a href='https://github.com/jameslieu/rental_yield_calculator' target='_blank' class="card-footer-item">
                                <span class="icon "><i class="fa fa-github"></i></span>
                            </a>
                        </footer>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src={{ URL::asset('images/code-player.png') }} alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Code-player</p>
                                </div>
                            </div>

                            <div class="content">
                                An app inspired by jsfiddle.net.
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href='http://jameslieu.co.uk/projects/jquery-code-player/index.html' target='_blank' class="card-footer-item">
                                <span class="icon"><i class="fa fa-laptop"></i></span>
                            </a>
                            <a href='https://github.com/jameslieu/jquery-code-player' target='_blank' class="card-footer-item">
                                <span class="icon "><i class="fa fa-github"></i></span>
                            </a>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src={{ URL::asset('images/tip-cal.png') }} alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Tip-calculator</p>
                                </div>
                            </div>

                            <div class="content">
                                Calculate the tip cost for your meal.
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href='http://jameslieu.co.uk/projects/tip-calculator/index.html' target='_blank' class="card-footer-item">
                                <span class="icon"><i class="fa fa-laptop"></i></span>
                            </a>
                            <a href='https://github.com/jameslieu/tip_calculator' target='_blank' class="card-footer-item">
                                <span class="icon "><i class="fa fa-github"></i></span>
                            </a>
                        </footer>
                    </div>

                </div>
                <div class="column">
                </div>
                <div class="column">
                </div>
            </div>
        </div>
  </section>
@endsection