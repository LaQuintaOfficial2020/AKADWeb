$(function(){
  var avatarMod = function(){
    this.init();
  };

  var avatarAssets = {
    skinColor: function(id){
      switch(id){
        case 1: return '/img/avatar-assets/skin-color/ST-1.png'; break;
        case 2: return '/img/avatar-assets/skin-color/ST-2.png'; break;
        case 3: return '/img/avatar-assets/skin-color/ST-3.png'; break;
        case 4: return '/img/avatar-assets/skin-color/ST-4.png'; break;
      }
    },
    eyes: function(id){
      switch(id){
        case 1: return '/img/avatar-assets/eyes/eyesset1c.png'; break;
        case 2: return '/img/avatar-assets/eyes/eyesset3a.png'; break;
      }
    },
    brow: function(id){
      switch(id){
        case 1: return '/img/avatar-assets/brow/brows1b.png'; break;
        case 2: return '/img/avatar-assets/brow/brow1b.png'; break;
      }
    },
    mouth: function(id){
      switch(id){
        case 1: return '/img/avatar-assets/mouth/mouth1.png'; break;
        case 2: return '/img/avatar-assets/mouth/mouth2.png'; break;
      }
    }, 
    nose: function(id){
      switch(id){
        case 1: return '/img/avatar-assets/nose/nose1.png'; break;
        case 2: return '/img/avatar-assets/nose/nose2.png'; break;
        case 3: return '/img/avatar-assets/nose/nose3.png'; break;
      }
    }, 
    top: function(id){
      switch(id){
        case 1: return '/img/avatar-assets/clothing/basketball-top/bstop.png'; break;
      }
    },
    bottom: function(id){
      switch(id){
        case 1: return '/img/avatar-assets/clothing/default-pants/pants2.png'; break;
      }
    },
    hair: function(id){
      switch(id){
        case 1: return '/img/avatar-assets/hair/hairbg1.png'; break;
        case 2: return '/img/avatar-assets/hair/hairbg2.png'; break;
        case 3: return '/img/avatar-assets/hair/hairbg3.png'; break;
        case 4: return '/img/avatar-assets/hair/hairbg4.png'; break;
        case 5: return '/img/avatar-assets/hair/hairbg5.png'; break;
        case 6: return '/img/avatar-assets/hair/malehairbg1.png'; break;
        case 7: return '/img/avatar-assets/hair/malehairbg2.png'; break;
        case 8: return '/img/avatar-assets/hair/malehairbg3.png'; break;
        case 8: return '/img/avatar-assets/hair/malehairbg4.png'; break;
      }
    }

  }

  var getPosition = {
    up_right: function(pos){
      return (parseInt(pos) + 10) + 'px';
    },
    down_left: function(pos){
      return (parseInt(pos) - 10) + 'px';
    }
  }

  var getSize = {
    increase: function(size){
      return (parseInt(size) + 10) + 'px';
    },
    decrease: function(size){
      return (parseInt(size) - 10) + 'px';
    }
  }

avatarMod.prototype = {
  init: function(){
    // this.loadSample();
    // For future implementation ;
    if (!$('.avatar-creation').length){
      $('.asset-tab').hide();
      $('.footer-buttons').hide();
      $('.avatar-container').removeClass('col-5').addClass('col');
    }else{
      $('.asset-tab').show();
      $('.footer-buttons').show();
      $('.avatar-container').removeClass('col').addClass('col-5');
    }
  },

  loadSample: function(){
    // content for future ; 
  },

  changeAsset: function(category, id){
    var getFunc = avatarAssets[category],
        newAsset = getFunc(id);

        console.log(newAsset, category, id);
        
        switch(category){
          case "skinColor": 
            $('.img-skin-color img').attr('src', newAsset);
            break;
          case "eyes":
            $('.img-eyes img').attr('src', newAsset);
            break;
          case "brow":
          $('.img-brow img').attr('src', newAsset);
          break;
          case "mouth":
          $('.img-mouth img').attr('src', newAsset);
          break;
          case "nose":
          $('.img-nose img').attr('src', newAsset);
          break;
          case "hair":
          $('.img-hair img').attr('src', newAsset);
          break;
          case "top":
          $('.img-clothing-top img').attr('src', newAsset);
          break;
          case "bottom":
          $('.img-clothing-bottom img').attr('src', newAsset);
          break;
        };
    },
    changePosition: function(pos, category){
      var size, 
          newPos = (pos === "left" || pos === "right") ? "right" : "top", 
          pos2 = (pos === 'up' || pos === 'right') ? 'down_left' : 'up_right';
          console.log(pos2, pos);
          
      switch(category){
        // case "skinColor": 
        //   newCat = $('.img-skin-color img').attr(newPos);
        //   break;
        case "eyes":
          size = $('.img-eyes img').css(newPos);
          var getFunc = getPosition[pos2],
              newSize = getFunc(size);
          $('.img-eyes img').css(newPos, newSize);
          break;
        case "brow":
          size = $('.img-brow img').css(newPos);
          var getFunc = getPosition[pos2],
              newSize = getFunc(size);
          $('.img-brow img').css(newPos, newSize);
          break;
        case "mouth":
          size = $('.img-mouth img').css(newPos);
          var getFunc = getPosition[pos2],
          newSize = getFunc(size);
          $('.img-mouth img').css(newPos, newSize);
          break;
        case "nose":
          size = $('.img-nose img').css(newPos);
          var getFunc = getPosition[pos2],
          newSize = getFunc(size);
          $('.img-nose img').css(newPos, newSize);
          break;
        case "hair":
          size = $('.img-hair img').css(newPos);
          var getFunc = getPosition[pos2],
          newSize = getFunc(size);
          $('.img-hair img').css(newPos, newSize);
          break;
        case "top":
          size = $('.img-clothing-top img').css(newPos);
          var getFunc = getPosition[pos2],
          newSize = getFunc(size);
          $('.img-clothing-top img').css(newPos, newSize);
          break;
        case "bottom":
          size = $('.img-clothing-bottom img').css(newPos);
          var getFunc = getPosition[pos2],
          newSize = getFunc(size);
          $('.img-clothing-bottom img').css(newPos, newSize);
          break;
      };
    },
    changeSize: function(change, category){
      var size;
          
      switch(category){
        // case "skinColor": 
        //   newCat = $('.img-skin-color img').attr(newPos);
        //   break;
        case "eyes":
          size = $('.img-eyes img').css('height');
          var getFunc = getSize[change],
              newSize = getFunc(size);
          $('.img-eyes img').css('height', newSize);
          break;
        case "brow":
          size = $('.img-brow img').css('height');
          var getFunc = getSize[change],
              newSize = getFunc(size);
          $('.img-brow img').css('height', newSize);
          break;
        case "mouth":
          size = $('.img-mouth img').css('height');
          var getFunc = getSize[change],
          newSize = getFunc(size);
          $('.img-mouth img').css('height', newSize);
          break;
        case "nose":
          size = $('.img-nose img').css('height');
          var getFunc = getSize[change],
          newSize = getFunc(size);
          $('.img-nose img').css('height', newSize);
          break;
        case "hair":
          size = $('.img-hair img').css('height');
          var getFunc = getSize[change],
          newSize = getFunc(size);
          $('.img-hair img').css('height', newSize);
          break;
        case "top":
          size = $('.img-clothing-top img').css('height');
          var getFunc = getSize[change],
          newSize = getFunc(size);
          $('.img-clothing-top img').css('height', newSize);
          break;
        case "bottom":
          size = $('.img-clothing-bottom img').css('height');
          var getFunc = getSize[change],
          newSize = getFunc(size);
          $('.img-clothing-bottom img').css('height', newSize);
          break;
      };
    }
}
$(document)
  .on('click', '.avtasst', function(){
    avatarMod.prototype.changeAsset($(this).data('category'), $(this).data('id'))
  })

  .on('click', '.pos', function(){
    avatarMod.prototype.changePosition($(this).data('align'),$(this).parents('.asset-tab').find('.nav-link.active').data('cat-tab'))
  })

  .on('click', '.size', function(){
    avatarMod.prototype.changeSize($(this).data('change'),$(this).parents('.asset-tab').find('.nav-link.active').data('cat-tab'))
  })

  var avatar = new avatarMod();
})