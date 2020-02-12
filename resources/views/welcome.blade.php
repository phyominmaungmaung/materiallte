@extends('layouts.master')
@section('title') Welcome @stop
@section('content')

    <div id="index-banner" class="parallax-container">
        <div class="parallax"><img src="img/bg.jpg" alt="Unsplashed background img 1"></div>
    </div>
    <div id='wrap'>

        <div id='external-events'>
            <h4>Draggable Events</h4>

            <div id='external-events-list'>
                <div class='fc-event'>My Event 1</div>
                <div class='fc-event'>My Event 2</div>
                <div class='fc-event'>My Event 3</div>
                <div class='fc-event'>My Event 4</div>
                <div class='fc-event'>My Event 5</div>
            </div>

            <p>
                <input type='checkbox' id='drop-remove' />
                <label for='drop-remove'>remove after drop</label>
            </p>
        </div>

        <div id='calendar'></div>

        <div style='clear:both'></div>

    </div>
    <div class="container text-center">
        <div id="map">

        </div>
    </div>

    @stop