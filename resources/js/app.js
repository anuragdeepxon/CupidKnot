window.$ = window.jQuery = require('jquery')

var dt = require('datatables.net')

import 'jquery-ui/ui/widgets/datepicker.js'

import 'jquery-ui/ui/widgets/slider'

$(document).ready(function (e) {
  if (true) {
    let getURL = '/user/matching'
    $.ajax({
      type: 'GET',
      url: getURL,
      data: {
        _token: '{{ csrf_token() }}',
      },
      dataType: 'json',
      encode: true,
      beforeSend: function () {
        $('#loader').addClass('show')
        $('#loader').removeClass('hide')
      },
      success: function (result) {
        $('#uploadButton').addClass('hide')
        $('#uploadButton').removeClass('show')

        result.data = result.data.sort((a, b) => b.percentage - a.percentage)

        $.each(result.data, function (i, item) {
          var cardContent =
            "<section class='my-10 p-1 md:p-1 text-center md:text-left shadow-lg border-2 border-solid border-slate-300 rounded-3xl'>" +
            "<div class='flex justify-center'>" +
            "<div class=''>" +
            "<div class='block p-6 rounded-lg shadow-lg bg-white m-4'>" +
            "<div class='md:flex md:flex-row'>" +
            "<div class='md:w-96 w-36 flex justify-center items-center mb-6 lg:mb-0 mx-auto md:mx-0'>" +
            "<div class='avatar'>" +
            "<div class='w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2'>" +
            "<img src='https://api.lorem.space/image/movie?hash=3174" +
            item.id +
            "' /></div></div></div>" +
            "<div class='md:ml-6'>" +
            "<p id='first_name' class='font-semibold mr-0 lg:mr-10 text-xl mb-2 text-gray-800'>" +
            item.first_name +
            '</div>' +
            "<div class='md:ml-6 justify-end'>" +
            '</p>' +
            "<p id='income' class='font-semibold text-gray-500 mb-0'>Gender: " +
            item.gender +
            '</p>' +
            "<p id='income' class='font-semibold text-gray-500 mb-0'>Occupation: " +
            item.occupation +
            '</p>' +
            "<p id='income' class='font-semibold text-gray-500 mb-0'>Annual Income: ₹ " +
            item.annual_income +
            '</p>' +
            '</div>' +
            "<div class='md:ml-6 justify-end'>" +
            "<p id='income' class='font-semibold text-gray-500 mb-0'>Family Type: " +
            item.family_type +
            '</p>' +
            "<p id='income' class='font-semibold text-gray-500 mb-0'>Manglik: " +
            item.is_manglik +
            '</p>' +
            "<p id='income' class='font-semibold text-gray-500 mb-0'>Occupation: " +
            item.occupation +
            '</p>' +
            "<p class='text-gray-500 font-light mb-6'>" +
            '</p>' +
            '</div>' +
            "<div class='md:ml-6 justify-end'>" +
            "<div class='stats shadow bg-slate-200'>" +
            "<div class='stat'>" +
            "<div class='stat-title text-slate-800'>Match to Your Profile</div>" +
            "<div id='match' class='stat-value text-slate-800'>" +
            item.percentage +
            '%' +
            '</div>' +
            '</div></div></div></div></div></div></div></section>'

          $('#cardsArea').append(cardContent)
        })
      },
      error: function (data) {
        $('#message').html('')
      },
      complete: function () {
        $('#loader').addClass('hide')
        $('#loader').removeClass('show')
      },
    }).done(function (result) {
      if (result.success == true) {
      } else {
        $('#message').html(result.message)
      }
    })
  }
})

$(document).ready(function () {
  var htmlIcons = {
    close: {
      icon: '<span class="html-entity">&times;</span>',
    },
    checkAll: {
      icon: '<span class="html-entity">&#9745;</span>',
    },
    uncheckAll: {
      icon: '<span class="html-entity">&#9744;</span>',
    },
  }

  $('#ex_occupation').multiselect({
    linkInfo: htmlIcons,
  })

  $('#ex_family_type').multiselect({
    linkInfo: htmlIcons,
  })
})

$(function () {
  $('#ex_income').slider({
    range: true,
    min: 0,
    max: 50000000,
    values: [10000000, 30000000],
    slide: function (event, ui) {
      $('#inc_val').html('₹' + ui.values[0] + ' - ₹' + ui.values[1])
      $('input[name=expected_income_low]').val(ui.values[0])
      $('input[name=expected_income_high]').val(ui.values[1])
    },
  })

  $('#inc_val').text(
    '₹' +
      $('#ex_income').slider('values', 0) +
      ' - ₹' +
      $('#ex_income').slider('values', 1),
  )

  $('input[name=expected_income_low]').val($('#ex_income').slider('values', 0))
  $('input[name=expected_income_high]').val($('#ex_income').slider('values', 1))
})

$(function () {
  $('#datepicker').datepicker()
})

jQuery(document).ready(function ($) {
  'use strict'
  // Fly-Out Navigation
  $('.arya-fly-but-click').on('click', function () {
    $('#arya-fly-wrap').toggleClass('arya-fly-menu')
    $('#arya-fly-wrap').toggleClass('arya-fly-shadow')
    $('.arya-fly-but-wrap').toggleClass('arya-fly-open')
    $('.arya-fly-fade').toggleClass('arya-fly-fade-trans')
  })

  $('#overlay').on('click', function () {
    $('#arya-fly-wrap').toggleClass('arya-fly-menu')
    $('#arya-fly-wrap').toggleClass('arya-fly-shadow')
    $('.arya-fly-but-wrap').toggleClass('arya-fly-open')
    $('.arya-fly-fade').toggleClass('arya-fly-fade-trans')
  })
})
