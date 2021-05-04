using CKUT.Core.Services.Ch3.No4;
using FluentAssertions;
using NUnit.Framework;

namespace CKUT.UnitTests.Ch3
{
    [TestFixture]
    public class Ch3Test2
    {
        private IFileExtensionManager _fileExtensionManager;
        private string _fileName;
        private LogAnalyzer _logAnalyer;

        [SetUp]
        public void SetUp()
        {
            _fileExtensionManager = new FakeManager();
            _logAnalyer = new LogAnalyzer(_fileExtensionManager);
        }

        [Test]
        public void LogAnalyzer_Should_Support_TxtFile()
        {
            GivenFileName();
            _logAnalyer.IsValidFileName(_fileName).Should().Be(true);
        }

        private void GivenFileName()
        {
            _fileName = "1.txt";
        }
    }
}