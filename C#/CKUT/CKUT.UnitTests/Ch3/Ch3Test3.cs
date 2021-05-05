using CKUT.Core.Services.Ch3.No5;
using FluentAssertions;
using NSubstitute;
using NUnit.Framework;

namespace CKUT.UnitTests.Ch3
{
    [TestFixture]
    public class Ch3Test3
    {
        private FileExtensionManager _fileExtensionManager;
        private string _fileName;
        private LogAnalyzer _logAnalyer;

        [SetUp]
        public void SetUp()
        {
            //_fileExtensionManager = new FakeManager();
            _fileExtensionManager = Substitute.For<FileExtensionManager>();

            
            _logAnalyer = new LogAnalyzer(_fileExtensionManager);
        }

        [Test]
        public void LogAnalyzer_Should_Support_TxtFile()
        {
            GivenTxtFileName();
            _fileExtensionManager.IsValid(_fileName).Returns(true);


            _logAnalyer.IsValidFileName(_fileName).Should().Be(true);
        }

        [Test]
        public void LogAnalyzer_Should_Not_Support_PngFile()
        {
            GivenPngFileName();
            _logAnalyer.IsValidFileName(_fileName).Should().Be(false);
        }

        private void GivenTxtFileName()
        {
            _fileName = "1.txt";
        }

        private void GivenPngFileName()
        {
            _fileName = "1.png";
        }
    }
}