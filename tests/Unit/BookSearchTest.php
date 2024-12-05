<?php
namespace Tests\Unit;

use App\Services\BookService;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class BookSearchTest extends TestCase
{
    /**
     * @var BookService|MockObject
     */
    protected $bookService;

    protected function setUp(): void {
        parent::setUp();
        
        // Membuat mock dari BookService
        $this->bookService = $this->createMock(BookService::class);
    }

    public function testSearchBooksReturnsMatchingResults()
    {
        $books = [
            ['title' => 'Effortless', 'author' => 'Greg McKeown'],
            ['title' => 'Crazy Rich Asians', 'author' => 'Kevin Kwan'],
            ['title' => 'Koala Kumal', 'author' => 'Raditya Dika'],
        ];

        // Memastikan metode searchBooks dipanggil dan mengembalikan hasil yang diinginkan
        $this->bookService->expects($this->once())
                          ->method('searchBooks')
                          ->with($books, 'Rich')
                          ->willReturn([['title' => 'Crazy Rich Asians', 'author' => 'Kevin Kwan']]);

        $result = $this->bookService->searchBooks($books, 'Rich');
        $this->assertCount(1, $result);
        $this->assertSame('Crazy Rich Asians', $result[0]['title']);
    }

    public function testSearchBooksReturnsEmptyIfNoMatch()
    {
        $books = [
            ['title' => 'Effortless', 'author' => 'Greg McKeown'],
            ['title' => 'Crazy Rich Asians', 'author' => 'Kevin Kwan'],
            ['title' => 'Koala Kumal', 'author' => 'Raditya Dika'],
        ];

        // Memastikan metode searchBooks dipanggil dan mengembalikan hasil kosong
        $this->bookService->expects($this->once())
                          ->method('searchBooks')
                          ->with($books, 'Java')
                          ->willReturn([]);

        $result = $this->bookService->searchBooks($books, 'Java');
        $this->assertCount(0, $result);
    }
}
