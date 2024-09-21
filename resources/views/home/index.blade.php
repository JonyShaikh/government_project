@extends('frontend.master')

@section('content')


    <div class="container">
        <div class="announcement">
            <h2>সহকারী শিক্ষক নিয়োগ-২০২৩ </h2>
            <ul>
                <li>পাঠ পরিকল্পনা ও শিক্ষক সহায়িকা</li>
                <li>শিক্ষার্থীদের প্রোফাইল তৈরি</li>
                <li>IPEMIS SYSTEM (Live Server)</li>
                <li>পরীক্ষার ১ম গ্রুপ (রংপুর, বরিশাল ও সিলেট বিভাগ) এর চূড়ান্ত ফলাফল</li>
                <li>লিখিত পরীক্ষার পুনঃনিরীক্ষান্তে সংশোধিত ফলাফল-৩য় এল্প (ঢাকা ও চট্টগ্রাম বিভাগ)</li>
                <li>পরীক্ষা-২য় গ্রুপ (রাজশাহী, খুলনা ও ময়মনসিংহ বিভাগ) এর চূড়ান্ত ফলাফল (নিয়োগের জন্য প্রাথমিক ভাবে নির্বাচিত)</li>
            </ul>
        </div>

        <div class="notice">
            <h2>নোটিশ</h2>
            <div class="text-size">
                <label for="text-size">Text size:</label>
                <select id="text-size">
                    <option value="small">A</option>
                    <option value="medium">A</option>
                    <option value="large">A</option>
                </select>
            </div>
            <div class="color">
                <label for="color">Color:</label>
                <select id="color">
                    <option value="black">C</option>
                    <option value="white">C</option>
                    <option value="gray">C</option>
                </select>
            </div>
            <div class="search">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ক্রমিক</th>
                        <th>শিরোনাম</th>
                        <th>প্রকাশের তারিখ</th>
                        <th>ডাউনলোড</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>2023-07-20</td>
                        <td><button>ডাউনলোড</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>2023-07-20</td>
                        <td><button>ডাউনলোড</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>2023-07-20</td>
                        <td><button>ডাউনলোড</button></td>
                    </tr>
                </tbody>
            </table>
            <button class="archive">আর্কাইভ</button>
        </div>
    </div>


@endsection