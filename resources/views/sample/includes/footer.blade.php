  
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Version 1.0.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  @include('sample.includes.control-bar')
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- Vendor JS -->
<script src="{{ elixir('js/vendor.js') }}"></script>
<!-- App JS -->
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<!-- Theme JS -->
<script src="{{ elixir('js/theme.js') }}"></script>

@stack('scripts')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>