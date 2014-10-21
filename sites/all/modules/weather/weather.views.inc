<?php

/**
 * @file
 * Views integration for weather module
 *
 * Copyright © 2013-2014 Tobias Quathamer <t.quathamer@gmx.net>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Implement hook_views_data().
 */
function weather_views_data() {
  $data = array();
  $data['weather_forecasts'] = array(
    // Definitions for table
    'table' => array(
      'group' => t('Weather'),
      'base' => array(
        'field' => 'id',
        'title' => t('Weather'),
        'help' => t('Display weather conditions and forecasts from all over the world.'),
      )
    ),
    // Following are the definitions for table fields.
    'geoid' => array(
      'title' => t('GeoID'),
      'help' => t('GeoID of the weather station.'),
      'field' => array(
        'handler' => 'views_handler_field',
      ),
      'filter' => array(
        'handler' => 'views_handler_filter_string',
      ),
    ),
    'time_from' => array(
      'title' => t('Start time'),
      'help' => t('The time from when the forecast is valid.'),
      'field' => array(
        'handler' => 'weather_handler_date',
      ),
      'filter' => array(
        'handler' => 'views_handler_filter_date',
      ),
      'sort' => array(
        'handler' => 'views_handler_sort_date',
      ),
    ),
    'time_to' => array(
      'title' => t('End time'),
      'help' => t('The time until when the forecast is valid.'),
      'field' => array(
        'handler' => 'weather_handler_date',
      ),
    ),
    'period' => array(
      'title' => t('Period of day'),
      'help' => t('The day period (0-3) of the forecast.'),
      'field' => array(
        'handler' => 'views_handler_field',
      ),
    ),
    'symbol' => array(
      'title' => t('Symbol'),
      'help' => t('Symbol for weather display, matches the condition.'),
      'field' => array(
        'handler' => 'weather_handler_condition',
      ),
    ),
    'condition' => array(
      'title' => t('Condition'),
      'help' => t('Condition for weather display, matches the symbol.'),
      'real field' => 'symbol',
      'field' => array(
        'handler' => 'weather_handler_condition',
      ),
    ),
    'precipitation' => array(
      'title' => t('Precipitation'),
      'help' => t('Amount of precipitation in mm.'),
      'field' => array(
        'handler' => 'views_handler_field_numeric',
      ),
    ),
    'wind' => array(
      'title' => t('Wind'),
      'help' => t('Wind information (direction and speed).'),
      'real field' => 'wind_direction',
      'field' => array(
        'handler' => 'weather_handler_wind',
      ),
    ),
    'wind_direction' => array(
      'title' => t('Wind direction'),
      'help' => t('Wind direction in degrees.'),
      'field' => array(
        'handler' => 'weather_handler_wind_direction',
      ),
    ),
    'wind_speed' => array(
      'title' => t('Wind speed'),
      'help' => t('Wind speed in m/s.'),
      'field' => array(
        'handler' => 'weather_handler_wind_speed',
      ),
    ),
    'temperature' => array(
      'title' => t('Temperature'),
      'help' => t('Temperature in degree celsius.'),
      'field' => array(
        'handler' => 'weather_handler_temperature',
      ),
    ),
    'pressure' => array(
      'title' => t('Pressure'),
      'help' => t('Pressure in hPa.'),
      'field' => array(
        'handler' => 'weather_handler_pressure',
      ),
    ),
  );
  $data['weather_places'] = array(
    // Definitions for table
    'table' => array(
      'group' => t('Weather'),
      'join' => array(
        'weather_forecasts' => array(
          'left_field' => 'geoid',
          'field' => 'geoid',
        ),
      ),
    ),
    'latitude' => array(
      'title' => t('Latitude'),
      'help' => t('Latitude of weather station.'),
      'field' => array(
        'handler' => 'views_handler_field_numeric',
      ),
    ),
    'longitude' => array(
      'title' => t('Longitude'),
      'help' => t('Longitude of weather station.'),
      'field' => array(
        'handler' => 'views_handler_field_numeric',
      ),
    ),
    'country' => array(
      'title' => t('Country'),
      'help' => t('Country of weather station.'),
      'field' => array(
        'handler' => 'views_handler_field',
      ),
    ),
    'name' => array(
      'title' => t('Name'),
      'help' => t('Name of weather station.'),
      'field' => array(
        'handler' => 'views_handler_field',
      ),
    ),
  );
  $data['weather_forecast_information'] = array(
    // Definitions for table
    'table' => array(
      'group' => t('Weather'),
      'join' => array(
        'weather_forecasts' => array(
          'left_field' => 'geoid',
          'field' => 'geoid',
        ),
      ),
    ),
    'utc_offset' => array(
      'title' => t('UTC offset'),
      'help' => t('UTC offset in minutes.'),
      'field' => array(
        'handler' => 'views_handler_field_numeric',
      ),
    ),
  );
  return $data;
}
