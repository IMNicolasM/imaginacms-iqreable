<?php

return [
  'qrColor' => [
    'name' => 'iqreable::qrColor',
    'value' => '#000000',
    'type' => 'inputColor',
    'props' => [
      'label' => 'iqreable::qrs.settings.color'
    ],
  ],
  'qrStyle' => [
    'name' => 'iqreable::qrStyle',
    'value' => 'square',
    'type' => 'select',
    'props' => [
      'label' => 'iqreable::qrs.settings.style',
      'options' => [
        ['label' => 'iqreable::qrs.settings.square', 'value' => 'square'],
        ['label' => 'iqreable::qrs.settings.dot', 'value' => 'dot'],
        ['label' => 'iqreable::qrs.settings.round', 'value' => 'round']
      ]
    ],
  ],
  'qrEyeColor' => [
    'name' => 'iqreable::qrEyeColor',
    'value' => '#000000',
    'type' => 'inputColor',
    'props' => [
      'label' => 'iqreable::qrs.settings.eyeColor'
    ],
  ],
  'qrEyeStyle' => [
    'name' => 'iqreable::qrEyeStyle',
    'value' => 'square',
    'type' => 'select',
    'props' => [
      'label' => 'iqreable::qrs.settings.eyeStyle',
      'options' => [
        ['label' => 'iqreable::qrs.settings.square', 'value' => 'square'],
        ['label' => 'iqreable::qrs.settings.circle', 'value' => 'circle']
      ]
    ],
  ],
  'qrSize' => [
    'name' => 'iqreable::qrSize',
    'value' => 256,
    'type' => 'input',
    'props' => [
      'label' => 'iqreable::qrs.settings.size',
      'type' => 'number'
    ]
  ],
];
