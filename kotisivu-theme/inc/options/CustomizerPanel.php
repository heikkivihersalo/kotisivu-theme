<?php

namespace Kotisivu\Theme;

class CustomizerPanel {
    /**
     * Panel for Customizer
     */
    private $panel;
    /**
     * Sections inside panel
     */
    private $sections;

    /**
     * Settings related to sections
     */
    private $settings;

    public function __construct($panel, $sections, $settings) {
        $this->set_panel($panel);
        $this->sections = $sections;
        $this->settings = $settings;
    }

    /**
     * Set options
     * @param array $options
     */
    public function set_panel($panel) {
        $required = [
            'id',
            'title',
            'description',
            'priority'
        ];

        foreach ($required as $key) {
            if (isset($panel[$key])) {
                $this->$key = $panel[$key];
                continue;
            }

            if ($key === 'title') { 
                $name = ucwords(strtolower(str_replace(['-', '_'], ' ', $panel['id'])));
            }

            if ($key === 'description') {
                $name = '';
            }

            if ($key === 'priority') {
                $name = 10;
            }

            $this->$key = $name;
        }
    }


    /**
     * Set settings field for given array of settings
     * @return array $setting
     */
    public function set_sections($data) {
        $setting = [];

        $required = [
            'title',
            'description',
            'panel',
            'priority',
            'capability'
        ];

        foreach ($required as $key) {
            if (isset($data[$key])) {
                $setting[$key] = $data[$key];
                continue;
            }

            if ($key === 'title') { 
                $name = '';
            }

            if ($key === 'description') {
                $name = '';
            }

            if ($key === 'panel') {
                $name = 'text';
            }

            if ($key === 'class') {
                $name = 'customize-control-' . str_replace(' ', '', $data['id']);
            }

            if ($key === 'placeholder') {
                $name = '';
            }

            $setting[$key] = $name;
        }

        return $setting;
    }


    /**
     * Set settings field for given array of settings
     * @return array $setting
     */
    public function set_settings($data) {
        $setting = [];

        $required = [
            'id',
            'default',
            'label',
            'description',
            'section',
            'type',
            'class',
            'placeholder'
        ];

        foreach ($required as $key) {
            if (isset($data[$key])) {
                $setting[$key] = $data[$key];
                continue;
            }

            if ($key === 'default') { 
                $name = '';
            }

            if ($key === 'label') { 
                $name = '';
            }

            if ($key === 'description') {
                $name = '';
            }

            if ($key === 'type') {
                $name = 'text';
            }

            if ($key === 'class') {
                $name = 'customize-control-' . str_replace(' ', '', $data['id']);
            }

            if ($key === 'placeholder') {
                $name = '';
            }

            $setting[$key] = $name;
        }

        return $setting;
    }


    /**
     * Add panel
     */
    public function add_panel($wp_customize) {
        $wp_customize->add_panel( $this->id, 
        array(
            'priority'         => $this->priority,
            'title'            => esc_html__( $this->title, 'kotisivu-theme' ),
            'description'      => esc_html__( $this->description, 'kotisivu-theme' ),
        ) 
      );
    }


    /**
     * Add sections and settings to Customizer
     */
    public function add_section($wp_customize) {
        /**
         * Loop through sections
         */
        foreach($this->sections as $section) {
            $wp_customize->add_section(
                $section['id'], array(
                    'title'         => esc_html__($section['title'], 'kotisivu-theme'),
                    'description'   => esc_html__($section['description'], 'kotisivu-theme'),
                    'panel'         => $this->id,
                    'priority'      => $section['priority'],
                    'capability'    => $section['capability']
                )
            );
        }

        /**
         * Loop through settings
         */
        foreach($this->settings as $data) {
            /* Validate user inputted array */
            $setting = $this->set_settings($data);

            /* Create setting field */
            $wp_customize->add_setting( $setting['id'], array(
                'default' => esc_html__($setting['default'])
            ));
            $wp_customize->add_control( $setting['id'],
            array(
                'label' => esc_html__( $setting['label'], 'kotisivu-theme' ),
                'description' => esc_html__( $setting['description'], 'kotisivu-theme' ),
                'section' => $setting['section'],
                'type' => $setting['type'],
                'input_attrs' => array(
                  'class' => $setting['class'],
                  'placeholder' => esc_html__($setting['placeholder'], 'kotisivu-theme' ),
                ),
            )
          );
        }

    }


    /**
     * 
     */
    public function register() {
        add_action('customize_register', [$this, 'add_panel']);
        add_action('customize_register', [$this, 'add_section']);
    }

}
