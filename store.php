<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Platitude </title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	</head>

    <script>
        //variables
        var items = 0;
        var listeditems = new Map();

        var pricetotal = 0;

        //home button
        function home(){
            //document.getElementById("infocontent").innerHTML = "Hello";
            window.open("index.php", "_parent","",true);
        }

        //add items
        function purchase(item){
            //calculate
            items++;
            pricetotal = pricetotal + 50;
            if(!(listeditems.has(item))){

                listeditems.set(item, 1);

            }else{
                
                listeditems.set(item, listeditems.get(item)+1);

            }

            //display
            document.getElementById("itemcount").innerHTML = items;
            document.getElementById("total").innerHTML = pricetotal + "$";

            var output = "";
            for(const [key, value] of listeditems.entries()){

                //make html displayable string with click function
                output = output + "<a onclick=\"remove(\'" + key +"\');\">" + key + " " + value + "</a> <br>"

            }
            document.getElementById("itemlist").innerHTML = output;
        }

        //remove items
        function remove(item){

            if(listeditems.has(item)){

                if(listeditems.get(item) > 0){
                    //calculate
                    listeditems.set(item, listeditems.get(item)-1);
                    pricetotal = pricetotal - 50;
                    items--;

                    if(listeditems.get(item) == 0){

                        listeditems.delete(item);

                    }

                    //display
                    document.getElementById("itemcount").innerHTML = items;
                    document.getElementById("total").innerHTML = pricetotal + "$";

                    var output = "";
                    for(const [key, value] of listeditems.entries()){

                        //make html displayable string with click function
                        output = output + "<a onclick=\"remove(\'" + key +"\');\">" + key + " " + value + "</a> <br>"

                    }
                document.getElementById("itemlist").innerHTML = output;

                }

            }
            
        }

        function checkout(){
            window.alert("Website malfunctioned, please contact an administrator!");

        }

    </script>

    <body>
        <div class="noselect">
<!-- headers -->
            <div class="headline"> Store </div>
            <button class="continuebutton" onclick="home();">front page</button>
<!-- content -->
            <p id="storecontent"> </p>
            <div class="storecontainer">
                <div class="storeChild">
                    <button onclick="purchase('PURSETHING');"> <i class="fa fa-shopping-cart" style="font-size:30px"></i></button>
                    <img src="images/items/one.jpg" alt="could not display image">
                </div>

                <div class="storeChild">
                   <button onclick="purchase('ÄLG');"> <i class="fa fa-shopping-cart" style="font-size:30px"></i></button>
                    <img src="images/items/two.jpg" alt="could not display image">
                </div>

                <div class="storeChild">
                    <button onclick="purchase('ORNAMENT');"> <i class="fa fa-shopping-cart" style="font-size:30px"></i></button>
                    <img src="images/items/three.jpg" alt="could not display image">
                </div>

           </div>
<!-- toolbar -->
           <div class="storetoolbar"> 
                <span> Items:( <span id="itemcount">0</span> )</span>
                <span class="caret"></span>
                <span onclick="checkout();">CHECKOUT</span>
                <div class="storetoolbarhidden">
                    <p>Items <span id="total">0$</span> </p>
                    <p id ="itemlist">You have not added any items yet!</p>
                </div>
            </div>
<!-- background cred -->
            <div class="imagecredit">
                <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@jaymantri?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Jay Mantri"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Jay Mantri</span></a>
            </div>
        </div>
    </body>

</html>

    