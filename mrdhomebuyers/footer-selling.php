<footer class="fl-page-footer-wrap" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
    <div class="fl-page-footer">
  <div class="fl-page-footer-container container">
    <div class="fl-page-footer-row row">
      <div class="col-md-12 text-center clearfix"><div class="fl-page-footer-text fl-page-footer-text-1">MRD Home Buyers  •  Address: 2050 Beavercreek Rd, Ste 101-470, Oregon City, OR 97045  •  
Phone: 503-925-5004  •  Info@MRDHomeBuyers.com</div><div class="fl-social-icons">
<a href="https://www.facebook.com/McClearyRealty" target="_blank" class="fl-icon fl-icon-color-mono fl-icon-facebook fl-icon-facebook-circle"></a><a href="https://www.instagram.com/mrd_portland/" target="_blank" class="fl-icon fl-icon-color-mono fl-icon-instagram fl-icon-instagram-circle"></a><a href="mailto:info@mrdhomebuyers.com" class="fl-icon fl-icon-color-mono fl-icon-email fl-icon-email-circle"></a></div></div>          </div>
  </div>
</div><!-- .fl-page-footer -->  </footer>
    </div><!-- .fl-page -->
<script type="text/javascript">

if(typeof jQuery == 'undefined' || typeof jQuery.fn.on == 'undefined') {
  document.write('<script src="https://u133180.h.reiblackbook.com/generic6/wp-content/plugins/bb-plugin/js/jquery.js"><\/script>');
  document.write('<script src="https://u133180.h.reiblackbook.com/generic6/wp-content/plugins/bb-plugin/js/jquery.migrate.min.js"><\/script>');
}

</script>  <script>
  function insiteUpdateTheme(path2,el) {

        var theme_style = jQuery(el).val();
    var presets = {"default":{"name":"Default","skin":"default","settings":{"fl-layout-width":"full-width","fl-layout-spacing":"0","fl-layout-shadow-size":"0","fl-body-bg-color":"#f2f2f2","fl-accent":"#428bca","fl-header-layout":"right","fl-nav-bg-type":"content","fl-heading-text-color":"#000000","fl-topbar-bg-type":"custom","fl-topbar-bg-color":"#ffffff","fl-header-bg-type":"custom","fl-header-bg-color":"#ffffff","0":"","fl-topbar-bg-gradient":"","fl-nav-bg-color":"","fl-nav-bg-gradient":"","fl-footer-widgets-bg-type":"","fl-footer-widgets-bg-color":"","fl-footer-bg-type":"","fl-footer-bg-color":"","fl-header-bg-gradient":""}},"default-dark":{"name":"Default Dark","skin":"default","settings":{"fl-accent":"#95bf48","fl-heading-text-color":"#95bf48","fl-topbar-bg-type":"custom","fl-topbar-bg-color":"#3e4147","fl-header-bg-type":"custom","fl-header-bg-color":"#282a2e","0":"","fl-body-bg-color":"","fl-topbar-bg-gradient":"","fl-header-layout":"","fl-nav-bg-type":"","fl-nav-bg-color":"","fl-nav-bg-gradient":"","fl-footer-widgets-bg-type":"","fl-footer-widgets-bg-color":"","fl-footer-bg-type":"","fl-footer-bg-color":"","fl-header-bg-gradient":""}},"classic":{"name":"Classic","skin":"default","settings":{"fl-layout-width":"boxed","fl-layout-spacing":"30","fl-layout-shadow-size":"15","fl-layout-shadow-color":"#d9d9d9","fl-accent":"#483182","fl-body-bg-color":"#efefe9","fl-header-layout":"bottom","fl-nav-bg-type":"custom","fl-nav-bg-color":"#483182","0":"","fl-topbar-bg-type":"","fl-topbar-bg-color":"","fl-topbar-bg-gradient":"","fl-nav-bg-gradient":"","fl-footer-widgets-bg-type":"","fl-footer-widgets-bg-color":"","fl-footer-bg-type":"","fl-footer-bg-color":"","fl-header-bg-type":"","fl-header-bg-color":"","fl-header-bg-gradient":""}},"stripe":{"name":"Stripe","skin":"default","settings":{"fl-body-bg-color":"#e6e6e6","fl-topbar-bg-type":"custom","fl-topbar-bg-color":"#fafafa","fl-header-layout":"bottom","fl-nav-bg-type":"custom","fl-nav-bg-color":"#385f82","fl-footer-bg-type":"custom","fl-footer-bg-color":"#385f82","fl-footer-widgets-bg-type":"custom","fl-footer-widgets-bg-color":"#fafafa","0":"","fl-accent":"","fl-topbar-bg-gradient":"","fl-nav-bg-gradient":"","fl-header-bg-type":"","fl-header-bg-color":"","fl-header-bg-gradient":""}},"deluxe":{"name":"Deluxe","skin":"deluxe","settings":{"fl-accent":"#657f8c","fl-body-bg-color":"#efefe9","fl-topbar-bg-type":"custom","fl-topbar-bg-color":"#657f8c","fl-topbar-bg-gradient":"1","fl-header-bg-type":"custom","fl-header-bg-color":"#1f1f1f","fl-header-bg-gradient":"1","fl-header-layout":"centered","fl-nav-bg-type":"custom","fl-nav-bg-color":"#333333","fl-nav-bg-gradient":"1","fl-footer-bg-type":"custom","fl-footer-bg-color":"#657f8c","fl-footer-widgets-bg-type":"custom","fl-footer-widgets-bg-color":"#1f1f1f","0":""}}};
    var customized = presets[theme_style]["settings"]
    customized["fl-preset"] = jQuery(el).val()
    customized = JSON.stringify(customized);

    //console.log(customized)
    var post_data = {wp_customize : 'on',theme: 'bb-theme-child',customized: customized,action: 'customize_save'}

    var success = function(data) {
      window.location.reload();
    }
    jQuery('.fl-page').attr('style','opacity:0.2');
    jQuery.ajax({url : path2, type: "POST",data: post_data, success: success});
  }


  function deleteAttachment() {
    var url = '/generic6/wp-admin/admin-ajax.php?action=insite_delete_attachment';
    var filename = jQuery(".attachment-details .setting input")[0].value;
    var thumbFilename = jQuery('.attachment-info img').attr('src');
    jQuery('.delete-attachment-replacement').attr('disabled', true);
    var success = function(resp) {
      // could be the full path or the thumb
      jQuery("img[src='"+filename+"']").parent(".centered").parent().parent().parent().remove();
      jQuery("img[src='"+thumbFilename+"']").parent(".centered").parent().parent().parent().remove();
      jQuery('.delete-attachment-replacement').attr('disabled', false);
      jQuery('.media-sidebar').html('');
    };
    jQuery.ajax({url:url,data:{filename:filename},type:"POST",success:success});
  }
  </script>
  <script type="text/javascript" id="onclose-script">
      window.onbeforeunload = function(){
        if(jQuery("html").hasClass("fl-builder-edit")){
          return "If you exit the page while editing, your changes will not be saved! To save or discard your changes Click \"Done\" in the toolbar!";
        }
      }
  </script>
  <script>
  document.domain = 'reiblackbook.com';
  </script>
  <script>
    function closeColorbox_func() {
      jQuery.colorbox.close();
    }

    function updateSelect_func(data) {
      jQuery('#insite_colorbox_select_reibb_form_id').html(data);
    }

    jQuery(window).on("message", function(e) {
      var data = e.originalEvent.data;

      try {
        var jdata = JSON.parse(data);
        if(jdata.type == 'framed') {

          switch(jdata.action) {
            case 'closeColorbox':
              closeColorbox_func();
              break;
            case 'updateSelect':
              updateSelect_func(jdata.data);
              break;

            default:
          }
        }
      }
      catch (err) {
      }

    });
  </script>
<link rel="stylesheet" id="builder-overrides-css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/Trouble Selling On Market - MRD Home Buyers_files/builder-overrides.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/css/Trouble Selling On Market - MRD Home Buyers_files/post-edit-overrides.js.download"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/css/Trouble Selling On Market - MRD Home Buyers_files/jquery.colorbox-1.4.js.download"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/css/Trouble Selling On Market - MRD Home Buyers_files/jquery.magnific-popup.js.download"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/css/Trouble Selling On Market - MRD Home Buyers_files/6160-layout.js.download"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/css/Trouble Selling On Market - MRD Home Buyers_files/jquery.throttle.min.js.download"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/css/Trouble Selling On Market - MRD Home Buyers_files/jquery.magnificpopup.min.js.download"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/css/Trouble Selling On Market - MRD Home Buyers_files/bootstrap.min.js.download"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/css/Trouble Selling On Market - MRD Home Buyers_files/theme.js.download"></script>
  <style>
  #cboxWrapper { z-index:100009;}
  </style>
<script type="text/javascript">
  //find a better way to do this
    jQuery('.fl-builder-help-button').remove();

  var currentInsiteForm;

  function cancelColorbox() {
    if (jQuery("#colorbox").css("display") == "block") {
      jQuery.colorbox.close();
    }
  }

  function closeEditInsiteForm(skip_refresh) {
  var url = '/wp-content/plugins/insite-plugins/insite-forms/delete_cache.php?id='+currentInsiteForm;
    jQuery.ajax({url : url, type: 'POST'});

   var preview = new FLBuilderPreview({
          type    : 'module',
          layout  : null
      });
      preview.preview();
    return false;
  }
  /* on click for builder menu edit button */
  function editInsiteForm(nodeId,optin) {
    //event.stopPropagation();
    FLBuilder._removeAllOverlays();
    var form_id = jQuery('#'+nodeId+'-insite_reibb_form_id').val();
    var default_form = jQuery('#form'+nodeId+' input[name="reibb_default_form"]').val();

    currentInsiteForm = form_id;
    var colorbox_opts = {iframe:true, width: '85%',height: '700', fixed: true, onClosed: closeEditInsiteForm,
      href: 'https://my.reiblackbook.com/forms/details/edit/'+form_id+'?iframe=1&site_id=6&reibb_default_form='+default_form};
  //  if (optin) {
    //  colorbox_opts.top = "50px"; //option form is behaving strange
  //  }
    jQuery.colorbox(colorbox_opts);
  }


  if (typeof wp != "undefined") {

          /**
       * A filter dropdown for month/dates.
       *
       * @class
       * @augments wp.media.view.AttachmentFilters
       * @augments wp.media.View
       * @augments wp.Backbone.View
       * @augments Backbone.View
       */
    wp.media.view.DateFilter = wp.media.view.AttachmentFilters.extend({
        id: 'media-attachment-date-filters',

        createFilters: function() {
          var filters = {};
          filters["my"] = {text: "My Library",
              props: {
                year: 2015,
                monthnum: 1}};
          filters["global"] = {text: "Global Libary",
          props: {
            year: 2015,
            monthnum: 2}};
          this.filters = filters;
        }
      });

      /**
        Huge override, just to fix one line  (this.collection.length-1),
        The attachment was always being added to index 0, so the top of the gallery instead of the bottom
       */
    wp.media.view.Attachments = wp.media.View.extend({
        tagName:   'ul',
        className: 'attachments',

        attributes: {
          tabIndex: -1
        },

        initialize: function() {
          this.el.id = _.uniqueId('__attachments-view-');

          _.defaults( this.options, {
            refreshSensitivity: wp.isTouchDevice ? 300 : 200,
            refreshThreshold:   3,
            AttachmentView:     wp.media.view.Attachment,
            sortable:           false,
            resize:             true,
            idealColumnWidth:   jQuery( window ).width() < 640 ? 135 : 150
          });

          this._viewsByCid = {};
          this.$window = jQuery( window );
          this.resizeEvent = 'resize.media-modal-columns';

          this.collection.on( 'add', function( attachment ) {
            this.views.add( this.createAttachmentView( attachment ), {
              //at: this.collection.indexOf( attachment )
              at: (this.collection.length-1) //REIBB Hack
            });
          }, this );

          this.collection.on( 'remove', function( attachment ) {
            var view = this._viewsByCid[ attachment.cid ];
            delete this._viewsByCid[ attachment.cid ];

            if ( view ) {
              view.remove();
            }
          }, this );

          this.collection.on( 'reset', this.render, this );

          this.listenTo( this.controller, 'library:selection:add',    this.attachmentFocus );

          // Throttle the scroll handler and bind this.
          this.scroll = _.chain( this.scroll ).bind( this ).throttle( this.options.refreshSensitivity ).value();

          this.options.scrollElement = this.options.scrollElement || this.el;
          jQuery( this.options.scrollElement ).on( 'scroll', this.scroll );

          this.initSortable();

          _.bindAll( this, 'setColumns' );

          if ( this.options.resize ) {
            this.on( 'ready', this.bindEvents );
            this.controller.on( 'open', this.setColumns );

            // Call this.setColumns() after this view has been rendered in the DOM so
            // attachments get proper width applied.
            _.defer( this.setColumns, this );
          }
        },

        bindEvents: function() {
          this.$window.off( this.resizeEvent ).on( this.resizeEvent, _.debounce( this.setColumns, 50 ) );
        },

        attachmentFocus: function() {
          this.$( 'li:first' ).focus();
        },

        restoreFocus: function() {
          this.$( 'li.selected:first' ).focus();
        },

        arrowEvent: function( event ) {
          var attachments = this.$el.children( 'li' ),
            perRow = this.columns,
            index = attachments.filter( ':focus' ).index(),
            row = ( index + 1 ) <= perRow ? 1 : Math.ceil( ( index + 1 ) / perRow );

          if ( index === -1 ) {
            return;
          }

          // Left arrow
          if ( 37 === event.keyCode ) {
            if ( 0 === index ) {
              return;
            }
            attachments.eq( index - 1 ).focus();
          }

          // Up arrow
          if ( 38 === event.keyCode ) {
            if ( 1 === row ) {
              return;
            }
            attachments.eq( index - perRow ).focus();
          }

          // Right arrow
          if ( 39 === event.keyCode ) {
            if ( attachments.length === index ) {
              return;
            }
            attachments.eq( index + 1 ).focus();
          }

          // Down arrow
          if ( 40 === event.keyCode ) {
            if ( Math.ceil( attachments.length / perRow ) === row ) {
              return;
            }
            attachments.eq( index + perRow ).focus();
          }
        },

        dispose: function() {
          this.collection.props.off( null, null, this );
          if ( this.options.resize ) {
            this.$window.off( this.resizeEvent );
          }

          /**
           * call 'dispose' directly on the parent class
           */
          wp.media.View.prototype.dispose.apply( this, arguments );
        },

        setColumns: function() {
          var prev = this.columns,
            width = this.$el.width();

          if ( width ) {
            this.columns = Math.min( Math.round( width / this.options.idealColumnWidth ), 12 ) || 1;

            if ( ! prev || prev !== this.columns ) {
              this.$el.closest( '.media-frame-content' ).attr( 'data-columns', this.columns );
            }
          }
        },

        initSortable: function() {
          var collection = this.collection;

          if ( wp.isTouchDevice || ! this.options.sortable || ! jQuery.fn.sortable ) {
            return;
          }

          this.$el.sortable( _.extend({
            // If the `collection` has a `comparator`, disable sorting.
            disabled: !! collection.comparator,

            // Change the position of the attachment as soon as the
            // mouse pointer overlaps a thumbnail.
            tolerance: 'pointer',

            // Record the initial `index` of the dragged model.
            start: function( event, ui ) {
              ui.item.data('sortableIndexStart', ui.item.index());
            },

            // Update the model's index in the collection.
            // Do so silently, as the view is already accurate.
            update: function( event, ui ) {
              var model = collection.at( ui.item.data('sortableIndexStart') ),
                comparator = collection.comparator;

              // Temporarily disable the comparator to prevent `add`
              // from re-sorting.
              delete collection.comparator;

              // Silently shift the model to its new index.
              collection.remove( model, {
                silent: true
              });
              collection.add( model, {
                silent: true,
                at:     ui.item.index()
              });

              // Restore the comparator.
              collection.comparator = comparator;

              // Fire the `reset` event to ensure other collections sync.
              collection.trigger( 'reset', collection );

              // If the collection is sorted by menu order,
              // update the menu order.
              collection.saveMenuOrder();
            }
          }, this.options.sortable ) );

          // If the `orderby` property is changed on the `collection`,
          // check to see if we have a `comparator`. If so, disable sorting.
          collection.props.on( 'change:orderby', function() {
            this.$el.sortable( 'option', 'disabled', !! collection.comparator );
          }, this );

          this.collection.props.on( 'change:orderby', this.refreshSortable, this );
          this.refreshSortable();
        },

        refreshSortable: function() {
          if ( wp.isTouchDevice || ! this.options.sortable || ! jQuery.fn.sortable ) {
            return;
          }

          // If the `collection` has a `comparator`, disable sorting.
          var collection = this.collection,
            orderby = collection.props.get('orderby'),
            enabled = 'menuOrder' === orderby || ! collection.comparator;

          this.$el.sortable( 'option', 'disabled', ! enabled );
        },

        /**
         * @param {wp.media.model.Attachment} attachment
         * @returns {wp.media.View}
         */
        createAttachmentView: function( attachment ) {
          var view = new this.options.AttachmentView({
            controller:           this.controller,
            model:                attachment,
            collection:           this.collection,
            selection:            this.options.selection
          });

          return this._viewsByCid[ attachment.cid ] = view;
        },

        prepare: function() {
          // Create all of the Attachment views, and replace
          // the list in a single DOM operation.
          if ( this.collection.length ) {
            this.views.set( this.collection.map( this.createAttachmentView, this ) );

          // If there are no elements, clear the views and load some.
          } else {
            this.views.unset();
            this.collection.more().done( this.scroll );
          }
        },

        ready: function() {
          // Trigger the scroll event to check if we're within the
          // threshold to query for additional attachments.
          this.scroll();
        },

        scroll: function() {
          var view = this,
            el = this.options.scrollElement,
            scrollTop = el.scrollTop,
            toolbar;

          // The scroll event occurs on the document, but the element
          // that should be checked is the document body.
          if ( el == document ) {
            el = document.body;
            scrollTop = jQuery(document).scrollTop();
          }

          if ( ! jQuery(el).is(':visible') || ! this.collection.hasMore() ) {
            return;
          }

          toolbar = this.views.parent.toolbar;

          // Show the spinner only if we are close to the bottom.
          if ( el.scrollHeight - ( scrollTop + el.clientHeight ) < el.clientHeight / 3 ) {
            toolbar.get('spinner').show();
          }

          if ( el.scrollHeight < scrollTop + ( el.clientHeight * this.options.refreshThreshold ) ) {
            this.collection.more().done(function() {
              view.scroll();
              toolbar.get('spinner').hide();
            });
          }
        }
      });
}
</script>

<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>