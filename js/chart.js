class WebUIChart{
    constructor(){
        
    }
    
    configure(data){
        // if(is_array()){
        //     console.log("object");
        // }else{
        //     console.log("Array");
        // }
        this.config = data;
    } 

    scale(scale){
        this.chartScale = scale;
    }

    visualize(type){
        let chart = document.createElement("div");
        chart.classList.add("pad-top-20px");
        chart.classList.add("pad-bottom-20px");
        // let chart = new SVGElement();
        // chart.width = "75%";
        // chart.viewbox = "0 0 231.29999 178.00009";

        if(type == "bar"){

        }
        else if(type == "line"){

        }
        // chart.src = "http://localhost/webUI/meta/chart.svg";
        
        return chart;
    }
}

