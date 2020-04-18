var simplemaps_countrymap_mapdata={
  main_settings: {
   //General settings
    width: "responsive", //'700' or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",
    
    //State defaults
    state_description: "Click for details",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "no",
    
    //Location defaults
    location_description: "Location description",
    location_url: "",
    location_color: "#FF0067",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_size: 25,
    location_type: "square",
    location_image_source: "frog.png",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    
    //Label defaults
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
    hide_eastern_labels: "no",
   
    //Zoom settings
    zoom: "no",
    manual_zoom: "no",
    back_image: "no",
    initial_back: "no",
    initial_zoom: "-1",
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
    //Popup settings
    popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
    //Advanced settings
    div: "map",
    auto_load: "yes",
    url_new_tab: "no",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "View Website",
    popups: "detect",
    state_image_url: "",
    state_image_position: "",
    location_image_url: ""
  },
  state_specific: {
    NGA2839: {
      name: "Borno",
      color: lockdown_color[8],
      hover_color: lockdown_color_h[8],
      url: "states/10",
      description: lockdown_status[8]
    },
    NGA2841: {
      name: "Abia",
      color: lockdown_color[1],
      hover_color: lockdown_color_h[1],
      url: "states/1",
      description: lockdown_status[1]
    },
    NGA2842: {
      name: "Akwa Ibom",
      color: lockdown_color[3],
      hover_color: lockdown_color_h[3],
      url: "states/3",
      description: lockdown_status[3]
    },
    NGA2843: {
      name: "Imo",
      color: lockdown_color[16],
      hover_color: lockdown_color_h[16],
      url: "states/16",
      description: lockdown_status[16]
    },
    NGA2844: {
      name: "Rivers",
      color: lockdown_color[32],
      hover_color: lockdown_color_h[32],
      url: "states/32",
      description: lockdown_status[32]
    },
    NGA2845: {
      name: "Bayelsa",
      color: lockdown_color[6],
      hover_color: lockdown_color_h[6],
      url: "states/6",
      description: lockdown_status[6]
    },
    NGA2846: {
      name: "Benue",
      color: lockdown_color[7],
      hover_color: lockdown_color_h[7],
      url: "states/7",
      description: lockdown_status[7]
    },
    NGA2847: {
      name: "Cross River",
      color: lockdown_color[9],
      hover_color: lockdown_color_h[9],
      url: "states/9",
      description: lockdown_status[9]
    },
    NGA2848: {
      name: "Taraba",
      color: lockdown_color[34],
      hover_color: lockdown_color_h[34],
      url: "states/34",
      description: lockdown_status[34]
    },
    NGA2849: {
      name: "Kwara",
      color: lockdown_color[23],
      hover_color: lockdown_color_h[23],
      url: "states/23",
      description: lockdown_status[23]
    },
    NGA2850: {
      name: "Lagos",
      color: lockdown_color[24],
      hover_color: lockdown_color_h[24],
      url: "states/24",
      description: lockdown_status[24]
    },
    NGA2851: {
      name: "Niger",
      color: lockdown_color[26],
      hover_color: lockdown_color_h[26],
      url: "states/26",
      description: lockdown_status[26]
    },
    NGA2852: {
      name: "Ogun",
      color: lockdown_color[27],
      hover_color: lockdown_color_h[27],
      url: "states/27",
      description: lockdown_status[27]
    },
    NGA2853: {
      name: "Ondo",
      color: lockdown_color[28],
      hover_color: lockdown_color_h[28],
      url: "states/28",
      description: lockdown_status[28]
    },
    NGA2854: {
      name: "Ekiti",
      color: lockdown_color[14],
      hover_color: lockdown_color_h[14],
      url: "states/14",
      description: lockdown_status[14]
    },
    NGA2855: {
      name: "Osun",
      color: lockdown_color[29],
      hover_color: lockdown_color_h[29],
      url: "states/29",
      description: lockdown_status[29]
    },
    NGA2856: {
      name: "Oyo",
      color: lockdown_color[30],
      hover_color: lockdown_color_h[30],
      url: "states/30",
      description: lockdown_status[30]
    },
    NGA2857: {
      name: "Anambra",
      color: lockdown_color[4],
      hover_color: lockdown_color_h[4],
      url: "states/4",
      description: lockdown_status[4]
    },
    NGA2858: {
      name: "Bauchi",
      color: lockdown_color[5],
      hover_color: lockdown_color_h[5],
      url: "states/5",
      description: lockdown_status[5]
    },
    NGA2859: {
      name: "Gombe",
      color: lockdown_color[15],
      hover_color: lockdown_color_h[15],
      url: "states/15",
      description: lockdown_status[15]
    },
    NGA2860: {
      name: "Delta",
      color: lockdown_color[10],
      hover_color: lockdown_color_h[10],
      url: "states/10",
      description: lockdown_status[10]
    },
    NGA2861: {
      name: "Edo",
      color: lockdown_color[13],
      hover_color: lockdown_color_h[13],
      url: "states/13",
      description: lockdown_status[13]
    },
    NGA2862: {
      name: "Enugu",
      color: lockdown_color[12],
      hover_color: lockdown_color_h[12],
      url: "states/12",
      description: lockdown_status[12]
    },
    NGA2863: {
      name: "Ebonyi",
      color: lockdown_color[11],
      hover_color: lockdown_color_h[11],
      url: "states/11",
      description: lockdown_status[11]
    },
    NGA2864: {
      name: "Kaduna",
      color: lockdown_color[18],
      hover_color: lockdown_color_h[18],
      url: "states/18",
      description: lockdown_status[18]
    },
    NGA2865: {
      name: "Kogi",
      color: lockdown_color[22],
      hover_color: lockdown_color_h[22],
      url: "states/22",
      description: lockdown_status[22]
    },
    NGA2866: {
      name: "Plateau",
      color: lockdown_color[31],
      hover_color: lockdown_color_h[31],
      url: "states/31",
      description: lockdown_status[31]
    },
    NGA2867: {
      name: "Nassarawa",
      color: lockdown_color[25],
      hover_color: lockdown_color_h[25],
      url: "states/25",
      description: lockdown_status[25]
    },
    NGA2868: {
      name: "Jigawa",
      color: lockdown_color[17],
      hover_color: lockdown_color_h[17],
      url: "states/17",
      description: lockdown_status[17]
    },
    NGA2869: {
      name: "Kano",
      color: lockdown_color[19],
      hover_color: lockdown_color_h[19],
      url: "states/19",
      description: lockdown_status[19]
    },
    NGA2870: {
      name: "Katsina",
      color: lockdown_color[20],
      hover_color: lockdown_color_h[20],
      url: "states/20",
      description: lockdown_status[20]
    },
    NGA2871: {
      name: "Sokoto",
      color: lockdown_color[33],
      hover_color: lockdown_color_h[33],
      url: "states/33",
      description: lockdown_status[33]
    },
    NGA2872: {
      name: "Zamfara",
      color: lockdown_color[36],
      hover_color: lockdown_color_h[36],
      url: "states/36",
      description: lockdown_status[36]
    },
    NGA2873: {
      name: "Yobe",
      color: lockdown_color[35],
      hover_color: lockdown_color_h[35],
      url: "states/35",
      description: lockdown_status[35]
    },
    NGA2879: {
      name: "Kebbi",
      color: lockdown_color[21],
      hover_color: lockdown_color_h[21],
      url: "states/21",
      description: lockdown_status[21]
    },
    NGA2881: {
      name: "Adamawa",
      color: lockdown_color[2],
      hover_color: lockdown_color_h[2],
      url: "states/2",
      description: lockdown_status[2]
    },
    NGA3470: {
      name: "Federal Capital Territory",
      color: lockdown_color[37],
      hover_color: lockdown_color_h[37],
      url: "states/37",
      description: lockdown_status[37]
    }
  },
  locations: {
    /*"0": {
      lat: "9.083333",
      lng: "7.533333",
      name: "Abuja"
    }*/
  },
  labels: {},
  regions: {}
};