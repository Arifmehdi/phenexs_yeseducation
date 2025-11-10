<div class="sidebar">
    <div class="sidebar-widget sidebar-categories">
        <ul class="categories-list clearfix">
            @forelse($courses as $course)
                <li>
                    <a href="{{ route('courseDetails', $course->slug) }}">
                        {{ $course->title }}
                        <i class="flaticon-send"></i>
                    </a>
                </li>
            @empty
                <li><span>No courses available.</span></li>
            @endforelse
        </ul>
    </div>

    <div class="sidebar-widget sidebar-download">
        <div class="widget-title">
            <h3>Related Downloads</h3>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="widget-content">
            <ul class="download-list clearfix">
                <li>
                    <i class="flaticon-files"></i>
                    <h4><a href="coaching-details.html">PTE Coaching Brochure</a></h4>
                    <span>Last Update: 23 May 2020</span>
                </li>
                <li>
                    <i class="flaticon-files"></i>
                    <h4><a href="coaching-details.html">Exam Preparation Guide</a></h4>
                    <span>Last Update: 23 May 2020</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-widget sidebar-categories-2">
        <div class="widget-title">
            <h3>Visas Types We Offer</h3>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="widget-content">
            <ul class="categories-list clearfix">
                <li><a href="coaching-details.html">Working Visa</a></li>
                <li><a href="coaching-details.html">Tourists Visa</a></li>
                <li><a href="coaching-details.html">Immigration Visa</a></li>
                <li><a href="coaching-details.html">Stydy Visa</a></li>
                <li><a href="coaching-details.html">Transit Visa</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-widget sidebar-assessment">
        <div class="widget-title">
            <h3>Free Online Assessment</h3>
            <div class="dotted-box">
                <span class="dotted"></span>
                <span class="dotted"></span>
                <span class="dotted"></span>
            </div>
        </div>
        <div class="widget-content">
            <form action="#" method="post" class="assessment-form">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email address" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                    <div class="select-box">
                        <select class="wide">
                            <option data-display="Select">Select Visa Type</option>
                            <option value="1">Working Visas</option>
                            <option value="2">Study Visas</option>
                            <option value="3">Business Visas</option>
                            <option value="4">Tourist Visas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="theme-btn-two"><i class="flaticon-send"></i>Send
                        Message</button>
                </div>
            </form>
        </div>
    </div>
                </div>