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
    state_hover_color: "#CCCCCC",
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
      color: risk_color[8],
      hover_color: risk_color_h[8],
      url: "states/8",
      description: risk_rating[8]
    },
    NGA2841: {
      name: "Abia",
      color: risk_color[1],
      hover_color: risk_color_h[1],
      url: "states/1",
      description: risk_rating[1]
    },
    NGA2842: {
      name: "Akwa Ibom",
      color: risk_color[3],
      hover_color: risk_color_h[3],
      url: "states/3",
      description: risk_rating[3]
    },
    NGA2843: {
      name: "Imo",
      color: risk_color[16],
      hover_color: risk_color_h[16],
      url: "states/16",
      description: risk_rating[16]
    },
    NGA2844: {
      name: "Rivers",
      color: risk_color[32],
      hover_color: risk_color_h[32],
      url: "states/32",
      description: risk_rating[32]
    },
    NGA2845: {
      name: "Bayelsa",
      color: risk_color[6],
      hover_color: risk_color_h[6],
      url: "states/6",
      description: risk_rating[6]
    },
    NGA2846: {
      name: "Benue",
      color: risk_color[7],
      hover_color: risk_color_h[7],
      url: "states/7",
      description: risk_rating[7]
    },
    NGA2847: {
      name: "Cross River",
      color: risk_color[9],
      hover_color: risk_color_h[9],
      url: "states/9",
      description: risk_rating[9]
    },
    NGA2848: {
      name: "Taraba",
      color: risk_color[34],
      hover_color: risk_color_h[34],
      url: "states/34",
      description: risk_rating[34]
    },
    NGA2849: {
      name: "Kwara",
      color: risk_color[23],
      hover_color: risk_color_h[23],
      url: "states/23",
      description: risk_rating[23]
    },
    NGA2850: {
      name: "Lagos",
      color: risk_color[24],
      hover_color: risk_color_h[24],
      url: "states/24",
      description: risk_rating[24]
    },
    NGA2851: {
      name: "Niger",
      color: risk_color[26],
      hover_color: risk_color_h[26],
      url: "states/26",
      description: risk_rating[26]
    },
    NGA2852: {
      name: "Ogun",
      color: risk_color[27],
      hover_color: risk_color_h[27],
      url: "states/27",
      description: risk_rating[27]
    },
    NGA2853: {
      name: "Ondo",
      color: risk_color[28],
      hover_color: risk_color_h[28],
      url: "states/28",
      description: risk_rating[28]
    },
    NGA2854: {
      name: "Ekiti",
      color: risk_color[14],
      hover_color: risk_color_h[14],
      url: "states/14",
      description: risk_rating[14]
    },
    NGA2855: {
      name: "Osun",
      color: risk_color[29],
      hover_color: risk_color_h[29],
      url: "states/29",
      description: risk_rating[29]
    },
    NGA2856: {
      name: "Oyo",
      color: risk_color[30],
      hover_color: risk_color_h[30],
      url: "states/30",
      description: risk_rating[30]
    },
    NGA2857: {
      name: "Anambra",
      color: risk_color[4],
      hover_color: risk_color_h[4],
      url: "states/4",
      description: risk_rating[4]
    },
    NGA2858: {
      name: "Bauchi",
      color: risk_color[5],
      hover_color: risk_color_h[5],
      url: "states/5",
      description: risk_rating[5]
    },
    NGA2859: {
      name: "Gombe",
      color: risk_color[15],
      hover_color: risk_color_h[15],
      url: "states/15",
      description: risk_rating[15]
    },
    NGA2860: {
      name: "Delta",
      color: risk_color[10],
      hover_color: risk_color_h[10],
      url: "states/10",
      description: risk_rating[10]
    },
    NGA2861: {
      name: "Edo",
      color: risk_color[13],
      hover_color: risk_color_h[13],
      url: "states/13",
      description: risk_rating[13]
    },
    NGA2862: {
      name: "Enugu",
      color: risk_color[12],
      hover_color: risk_color_h[12],
      url: "states/12",
      description: risk_rating[12]
    },
    NGA2863: {
      name: "Ebonyi",
      color: risk_color[11],
      hover_color: risk_color_h[11],
      url: "states/11",
      description: risk_rating[11]
    },
    NGA2864: {
      name: "Kaduna",
      color: risk_color[18],
      hover_color: risk_color_h[18],
      url: "states/18",
      description: risk_rating[18]
    },
    NGA2865: {
      name: "Kogi",
      color: risk_color[22],
      hover_color: risk_color_h[22],
      url: "states/22",
      description: risk_rating[22]
    },
    NGA2866: {
      name: "Plateau",
      color: risk_color[31],
      hover_color: risk_color_h[31],
      url: "states/31",
      description: risk_rating[31]
    },
    NGA2867: {
      name: "Nassarawa",
      color: risk_color[25],
      hover_color: risk_color_h[25],
      url: "states/25",
      description: risk_rating[25]
    },
    NGA2868: {
      name: "Jigawa",
      color: risk_color[17],
      hover_color: risk_color_h[17],
      url: "states/17",
      description: risk_rating[17]
    },
    NGA2869: {
      name: "Kano",
      color: risk_color[19],
      hover_color: risk_color_h[19],
      url: "states/19",
      description: risk_rating[19]
    },
    NGA2870: {
      name: "Katsina",
      color: risk_color[20],
      hover_color: risk_color_h[20],
      url: "states/20",
      description: risk_rating[20]
    },
    NGA2871: {
      name: "Sokoto",
      color: risk_color[33],
      hover_color: risk_color_h[33],
      url: "states/33",
      description: risk_rating[33]
    },
    NGA2872: {
      name: "Zamfara",
      color: risk_color[36],
      hover_color: risk_color_h[36],
      url: "states/36",
      description: risk_rating[36]
    },
    NGA2873: {
      name: "Yobe",
      color: risk_color[35],
      hover_color: risk_color_h[35],
      url: "states/35",
      description: risk_rating[35]
    },
    NGA2879: {
      name: "Kebbi",
      color: risk_color[21],
      hover_color: risk_color_h[21],
      url: "states/21",
      description: risk_rating[21]
    },
    NGA2881: {
      name: "Adamawa",
      color: risk_color[2],
      hover_color: risk_color_h[2],
      url: "states/2",
      description: risk_rating[2]
    },
    NGA3470: {
      name: "Federal Capital Territory",
      color: risk_color[37],
      hover_color: risk_color_h[37],
      url: "states/37",
      description: risk_rating[37]
    }
  },
  locations: {},
  labels: {},
  regions: {},
  data: {
    data: {
      NGA2850: "20",
      NGA2839: "10",
      NGA2841: "20",
      NGA2842: "30",
      NGA2843: "30",
      NGA2844: "30",
      NGA2845: "10",
      NGA2846: "10",
      NGA2847: "30",
      NGA2848: "20",
      NGA2849: "20",
      NGA2851: "10",
      NGA2852: "30",
      NGA2853: "20",
      NGA2854: "10",
      NGA2855: "30",
      NGA2856: "30",
      NGA2857: "10",
      NGA2858: "10",
      NGA2859: "20",
      NGA2860: "20",
      NGA2861: "20",
      NGA2862: "30",
      NGA2863: "30",
      NGA2864: "20",
      NGA2865: "10",
      NGA2866: "20",
      NGA2867: "30",
      NGA2868: "30",
      NGA2869: "20",
      NGA2870: "10",
      NGA2871: "20",
      NGA2872: "30",
      NGA2873: "20",
      NGA2879: "20",
      NGA2881: "20",
      NGA3470: "20"
    }
  }
};